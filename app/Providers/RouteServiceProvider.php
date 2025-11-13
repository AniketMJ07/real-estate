<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
        $this->mapBroadcastRoutes();
    }

    private function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->group(base_path('routes/api.php'));
    }

    private function mapWebRoutes()
    {
        Route::middleware('web')
            ->group(base_path('routes/web.php'));
    }

    protected function mapBroadcastRoutes()
    {
        Route::middleware('channels')->group(base_path('routes/channels.php'));
        Route::middleware(['auth'])
            ->group(base_path('routes/auth_channels.php'));
    }
}
