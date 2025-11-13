<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class UserSystemRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->hasSession() || !$request->session()->has('_token')) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login'); // If no user, redirect to login
        }

        $role = $user->system_role; // Get the user's role

        if (!$role) {
            return abort(403, 'Something went Wrong. Contact Support. Err: SYS_ROLE_MISS'); // Abort if no role exists
        }

        $verificationRoutes = [
            'verify/aadhaar/send-otp',
            'verify/aadhaar',
            'verify/pan',
            'verify/gstin',
            'verify/gstin/get-captcha',
            'verify/gstin/save',
        ];

        if (in_array($request->path(), $verificationRoutes)) {
            return $next($request); // Allow access to verification routes
        }

        if ($role == "user") {
            if ($request->is('console/*') || $request->routeIs('console.*')) {
                if (!$user->businesses()->exists() || $user->businesses->count() == 0) {
                    $allowedPaths = [
                        'console/business/change/scope',
                        'console/business/create',
                        'console/profile/update/phone',
                        'console/business/store',
                        'console/business/invite/accept',
                        'console/business/invite/reject',
                    ];
                    if (in_array(request()->path(), $allowedPaths)) {
                        return $next($request);
                    } else {
                        foreach ($allowedPaths as $path) {
                            if (Str::contains($request->path(), $path)) {
                                return $next($request);
                            }
                        }
                        return redirect()->route('business.create')->with('error', 'You need to create a business first.');
                    }
                } else {
                    return $next($request);
                }
            }

            return redirect()->route('dashboard')->with('error', 'You do not have permission to access this page');
        } elseif ($role == "admin") {
            if ($request->is('admin/*') || $request->routeIs('admin.*')) {
                return $next($request);
            } else {
                return redirect()->route('admin.dashboard')->with('error', 'You cannot access this page as an admin.');
            }
        } else {
            return redirect()->route('dashboard')->with('error', 'You do not have permission to access this page');
        }
    }
}
