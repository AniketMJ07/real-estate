<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\ReloadOctane;
use App\Models\MerchantProvider;
use App\Models\Setting;
use Dotenv\Dotenv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;
use Spiral\RoadRunner\Console\Configuration\Section\Reload;

class SettingController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.settings');
    }

    public function store(Request $request)
    {
        $envSettings = ['MAIL_MAILER', 'MAIL_HOST', 'MAIL_PORT', 'MAIL_USERNAME', 'MAIL_PASSWORD', 'MAIL_ENCRYPTION', 'MAIL_FROM_ADDRESS', 'MAIL_FROM_NAME', 'RECAPTCHA_SITE_KEY', 'RECAPTCHA_SECRET_KEY', 'GOOGLE_LOGIN_APP_ID', 'GOOGLE_LOGIN_APP_SECRET'];
        $checkboxSettings = ['enable_google_login', 'enable_google_recaptcha', 'tawk_to_status', 'gst_billing_status', 'aadhaar_verification'];
        $allSettings = $request->except('_token', 'method', 'site_meta_image', 'site_logo_dark_mode', 'site_logo_light_mode', 'site_favicon', ...$envSettings, ...$checkboxSettings);

        foreach ($allSettings as $key => $value) {
            if (in_array($key, $envSettings)) {
                continue;
            } elseif (in_array($key, $checkboxSettings)) {
                continue;
            } else {
                $setting = Setting::where('key', $key)->first();
                if (!$setting) {
                    $setting = new Setting();
                    $setting->key = $key;
                }
                $setting->value = $value;
                $setting->save();
            }
        }

        foreach ($checkboxSettings as $key) {
            $setting = Setting::where('key', $key)->first();
            if (!$setting) {
                $setting = new Setting();
                $setting->key = $key;
            }
            $setting->value = $request->has($key) ? 'true' : 'false';
            $setting->save();
        }

        $envFile = DotenvEditor::load();
        foreach ($envSettings as $key) {
            if ($request->has($key)) {
                $value = $request->input($key);
                if ($envFile->getValue($key) !== $value) {
                    $envFile->setKey($key, $value);
                }
            }
        }
        $envFile->save();

        if ($request->hasFile('site_meta_image')) {
            $file = $request->file('site_meta_image');
            $file_name = 'meta_image.' . $file->getClientOriginalExtension();
            $path = public_path('assets/images/meta');
            $file->move($path, $file_name);
            $relative_path = 'assets/images/meta/' . $file_name;
            $setting = Setting::where('key', 'site_meta_image')->first();
            if (!$setting) {
                $setting = new Setting();
                $setting->key = 'site_meta_image';
            }
            $setting->value = $relative_path . "?v=" . time();
            $setting->save();
        }

        if ($request->hasFile('site_logo_dark_mode')) {
            $file = $request->file('site_logo_dark_mode');
            $file_name = 'logo_dark_mode.' . $file->getClientOriginalExtension();
            $path = public_path('assets/images/logo');
            $file->move($path, $file_name);
            $relative_path = 'assets/images/logo/' . $file_name;
            $setting = Setting::where('key', 'site_logo_dark_mode')->first();
            if (!$setting) {
                $setting = new Setting();
                $setting->key = 'site_logo_dark_mode';
            }
            $setting->value = $file_name . "?v=" . time();
            $setting->save();
        }


        if ($request->hasFile('site_logo_light_mode')) {
            $file = $request->file('site_logo_light_mode');
            $file_name = 'logo_light_mode.' . $file->getClientOriginalExtension();
            $path = public_path('assets/images/logo');
            $file->move($path, $file_name);
            $relative_path = 'assets/images/logo/' . $file_name;
            $setting = Setting::where('key', 'site_logo_light_mode')->first();
            if (!$setting) {
                $setting = new Setting();
                $setting->key = 'site_logo_light_mode';
            }
            $setting->value = $file_name . "?v=" . time();
            $setting->save();
        }

        if ($request->hasFile('site_favicon')) {
            $file = $request->file('site_favicon');
            $file_name = 'favicon.' . $file->getClientOriginalExtension();
            $path = public_path('assets/images/logo');
            $file->move($path, $file_name);
            $relative_path = 'assets/images/logo/' . $file_name;
            $setting = Setting::where('key', 'site_favicon')->first();
            if (!$setting) {
                $setting = new Setting();
                $setting->key = 'site_favicon';
            }
            $setting->value = $file_name . "?v=" . time();
            $setting->save();
        }

        Artisan::call('optimize:clear');
        ReloadOctane::dispatch();

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }

    public function toggleMerchantProvider(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'id' => 'required|integer|exists:merchant_providers,id',
            'is_active' => 'required|boolean',
        ]);

        try {
            $provider = MerchantProvider::findOrFail($validated['id']);
            $provider->is_active = $validated['is_active'];
            $provider->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Merchant provider status updated successfully.',
                'data' => [
                    'id' => $provider->id,
                    'is_active' => $provider->is_active,
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong while updating.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function callReloadOctane()
    {
        try {
            ReloadOctane::dispatch();
            return redirect()->back()->with('success', 'Octane reloaded successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to reload Octane: ' . $e->getMessage());
        }
    }
}
