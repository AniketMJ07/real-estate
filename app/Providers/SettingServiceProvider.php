<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class SettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $settings = '';
        if (DB::connection()->getDatabaseName() && Schema::hasTable("settings")) {
            if (Cache::has("settings")) {
                $settings = Cache::get("settings");
            } else {
                $settings = Cache::remember("settings", 3600, function () {
                    return Setting::pluck("value", "key")->all();
                });
            }
            config()->set("setting", $settings);
        }
    }
}
