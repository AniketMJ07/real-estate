<?php

use App\Http\Middleware\CheckIpAddress;
use App\Http\Middleware\UserRoles;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        channels: __DIR__ . '/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'user.roles' => UserRoles::class,
            'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
            'check.ip' => CheckIpAddress::class,
           
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
