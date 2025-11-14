<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserRoles
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login'); // If no user, redirect to login
        }

        $role = $user->roles()->first(); // Get the user's role

        if (!$role) {
            return abort(403, 'No role assigned'); // Abort if no role exists
        }


         if ($user->hasRole('admin')) {
            if ($request->is('admin/*') || $request->routeIs('admin.*')) {
                return $next($request);
            }
           
            // Redirect to admin dashboard if not on the correct route
            return redirect()->route('admin.dashboard')->with('error', 'You do not have permission to access this route.');
        } 
      

        return $next($request); // Continue the request if no issues
    }
}
