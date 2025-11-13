<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class CheckBusinessUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();
        $business_id = Session::get('selected_business_id');
        if ($business_id == null) {
            $defaultBusinessId = $user->default_business_id ?? null;
            if ($defaultBusinessId == null) {
                $defaultBusinessId = $user->businesses()->first()->id ?? null;
                $user->default_business_id = $defaultBusinessId;
                $user->save();
            }
            Session::put('selected_business_id', $defaultBusinessId);
        }

        $business = $user ? $user->business() : null;

        // Check if user has a business and the correct role
        $ownerBlockedRoutes = [];
        $managerBlockedRoutes = [
            '/business/users',
            '/business/invite/user',
            '/business/un-invite/user',
        ];
        $financeBlockedRoutes = [
            '/plans',
            '/api-key',
            '/api-keys',
            '/webhook',
            '/webhooks',
        ];
        $developerBlockedRoutes = [
            "/live-transactions",
            "/qrcode-transactions",
            "/qrcodetransactions",
            "/subscriptions",
            "/business/users",
            "/plans",
            '/business/invite/user',
            '/business/un-invite/user',
        ];

        if ($business && in_array($business->pivot->role, ['owner'])) {
            $blockedRoutes = $ownerBlockedRoutes;
        } elseif ($business && in_array($business->pivot->role, ['manager'])) {
            $blockedRoutes = $managerBlockedRoutes;
        } elseif ($business && in_array($business->pivot->role, ['finance'])) {
            $blockedRoutes = $financeBlockedRoutes;
        } elseif ($business && in_array($business->pivot->role, ['developer'])) {
            $blockedRoutes = $developerBlockedRoutes;
        } else {
            abort(403, 'You do not have permission to access this resource.');
        }
        $currentRoute = $request->path();
        if ($business != null && Str::contains($currentRoute, $blockedRoutes)) {
            abort(403, 'You do not have permission to access this resource.');
        }
        return $next($request);
    }
}
