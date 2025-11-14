<?php

namespace App\Http\Controllers\Admin;

use App\Enums\PermissionEnum;
use App\Http\Controllers\Controller;
use Artisan;
use Exception;
use App\Models\Setting;
use App\Models\SmsGateway;
use App\Models\State;
use App\Models\Translation;
use App\Models\User;
use Illuminate\Http\Request;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;
use Illuminate\Contracts\Cache\Factory;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class SettingController extends Controller
{
    public function index()
    {
        if (Schema::hasTable('sms_gateways')) {
            $sms_gateways = SmsGateway::all();
        } else {
            $sms_gateways = [];
        }

        return view('admin.settings.index', compact('sms_gateways'));
    }

    public function update(Request $request, Factory $cache)
    {
        // dd($request->all());
        $privateSettings = [];
        $allsettings = $request->except(array_unique(array_merge($privateSettings, ['_token', '_method', 'email_data', 'logo', 'favicon',])));


        if ($request->hasFile('logo')) {
            $setting = Setting::where('key', 'storeLogo')->first();
            if (!$setting) {
                $setting = new Setting();
                $setting->key = 'storeLogo';
            }
            $image = $request->file('logo');
            $filename = 'logo' . '.png';
            $smallFile = 'logo-sm' . '.png';
            Image::make($image)->resize(115, 36)->save(public_path('/assets/images/logo/' . $filename), 100, 'png');
            $logo_dark = 'logo_dark' . '.png';
            Image::make($image)->resize(120, 35)->save(public_path('/assets/images/logo/' . $logo_dark), 100, 'png');
            Image::make($image)->resize(120, 41)->save(public_path('/assets/images/logo/' . $smallFile), 100, 'png');
            // dd($filename);
            $setting->value = $filename . '?v=' . time() . Str::random(5);
            $setting->save();
        }

        if ($request->hasFile('favicon')) {
            // Favicon sizes you want to handle
            $sizes = [
                'favicon-16x16' => [16, 16],
                'favicon-32x32' => [32, 32],
                'favicon-96x96' => [96, 96],
                'favicon-128x128' => [128, 128],
                'favicon-36x36' => [36, 36],
                'favicon-48x48' => [48, 48],
                'favicon-144x144' => [144, 144],
                'favicon-192x192' => [192, 192],
                'favicon-512x512' => [512, 512]
            ];

            // Loop through each size and process the file
            foreach ($sizes as $key => $dimensions) {
                // First or create the setting
                $setting = Setting::firstOrCreate(
                    ['key' => $key], // Condition
                    ['value' => ''] // Default value if not found
                );

                // Handle the file upload and resizing
                $image = $request->file('favicon');
                $filename = $key . '.png';

                // Resize and save the image for the given dimensions
                Image::make($image)->resize($dimensions[0], $dimensions[1])
                    ->save(public_path('/assets/images/favicons/' . $filename), 100, 'png');

                // Update the value in the setting with cache-busting string
                $setting->value = $filename . '?v=' . time() . Str::random(5);
                $setting->save();
            }
        }

        foreach ($allsettings as $key => $value) {
            // Use firstOrCreate to either find or create a new setting
            $setting = Setting::firstOrCreate(
                ['key' => $key],  // Condition to search for the key
                ['value' => $value]  // Default value if not found
            );

            // Update the value if needed (optional, depending on your needs)
            $setting->value = $value;
            $setting->save();
        }



        $this->updateCheckBoxesSettings($request);


        $env = DotenvEditor::load();
        if (isset($request->email_data)) {
            foreach ($request->email_data as $key => $value) {
                $env->setKey($key, $value);
            }
        }

        $env->save();
        $cache->forget('settings'); //reset cache

        Artisan::call('cache:clear');
        Artisan::call('view:clear');

        return redirect()->to(url()->previous() . $request->window_redirect_hash)
            ->with('success', __('Settings saved successfully'));
    }

    private function updateCheckBoxesSettings($request)
    {
        $checkboxesSettings = [
            'enableReferAndEarn',
            'enableReserveAndRelaxModule',
            'enableHappeningModule',
            'enableStayAndRideModule',
            'enableGoToPlaceModule',
            'enableAnnouncementModule',

        ];
        foreach ($checkboxesSettings as $checkboxSetting) {
            $setting = Setting::where('key', $checkboxSetting)->first();
            if ($setting) {
                if ($request->$checkboxSetting == 'true') {
                    $setting->value = 'true';
                    $setting->save();
                } else {
                    $setting->value = 'false';
                    $setting->save();
                }
            } else {
                if ($checkboxSetting != null || $checkboxSetting != '') {
                    $setting = new Setting();
                    $setting->key = $checkboxSetting;
                    if ($request->$checkboxSetting == 'true') {
                        $setting->value = 'true';
                        $setting->save();
                    } else {
                        $setting->value = 'false';
                        $setting->save();
                    }
                }
            }
        }
    }

    public function fixUpdateIssues()
    {
        try {
            Artisan::call('migrate', [
                '--force' => true,
            ]);

            /* Save new keys for translations languages */
            $langData = file_get_contents(storage_path('language/english.json'));
            $a1 = json_decode($langData, true);

            $translations = Translation::all();

            if (count($translations) > 0) {

                foreach ($translations as $translation) {
                    //get the existing data of a translated language
                    $a2 = json_decode($translation->data, true);

                    //get the difference between the master file and the existing translation, and get the non-existing key
                    $diff = array_diff_key($a1, $a2);

                    //merge the non existing keys with the existing translation
                    $merged = array_merge($a2, $diff);

                    //save the translation
                    $translation->data = json_encode($merged);
                    $translation->save();
                }
            } else {
                $this->saveTranslation();
            }
            $this->refreshPermissionCache();

            Artisan::call('storage:link');
            Artisan::call('cache:clear');
            Artisan::call('view:clear');
            return redirect()->back()->with('success', 'Operation Successful');
        } catch (\Illuminate\Database\QueryException $qe) {
            return redirect()->back()->with('error', $qe->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }


    private function saveTranslation()
    {
        //create English Translation and save
        $translation = new Translation();
        $translation->language_name = 'English';
        $translation->language_code = 'english';
        $translation->data = file_get_contents(storage_path('language/english.json'));
        $translation->is_active = 1;
        $translation->is_default = 1;
        $translation->save();
    }

    private function refreshPermissionCache()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('permissions')->truncate();
        Schema::enableForeignKeyConstraints();

        app(PermissionRegistrar::class)->forgetCachedPermissions();


        $permissions = PermissionEnum::PERMISSIONS;

        foreach ($permissions as $key => $permission) {
            Permission::create($permission);
        }

        $user = User::where('id', '1')->first();
        $user->givePermissionTo(Permission::all());
    }
    
}
