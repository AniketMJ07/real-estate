<?php

namespace App\Http\Middleware;

use App\Helpers\Helpers;
use App\Models\BusinessApiKey;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class CheckIpAddress
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $apiKey = $request->secret;

        if (!$apiKey) {
            return response()->json(['success' => false, 'status' => 403, 'message' => 'API key is required'], 403);
        }

        $allApiKeys = Cache::remember('api_keys', 180 * 60, function () {
            return BusinessApiKey::all();
        });

        $apiKeyRecord = $allApiKeys->where('key', $apiKey)->where('is_active', true)->first();

        if (!$apiKeyRecord) {
            return response()->json(['success' => false, 'status' => 403, 'message' => 'Invalid API key'], 403);
        }

        // Get allowed IPs from the API key record (stored as JSON)
        if (
            is_null($apiKeyRecord->ip_addresses)
            || $apiKeyRecord->ip_addresses === ''
            || $apiKeyRecord->ip_addresses === '[]'
            || $apiKeyRecord->ip_addresses === '{}'
            || $apiKeyRecord->ip_addresses === 'null'
            || $apiKeyRecord->ip_addresses === '""'
            || $apiKeyRecord->ip_addresses === 'undefined'
        ) {
            return $next($request);
        }
        $allowedIps = $apiKeyRecord->ip_addresses;
        if (!is_array($apiKeyRecord->ip_addresses)) {
            $allowedIps = json_decode($allowedIps, true);
        }

        // If $allowedIps is null, empty, or not an array, allow access
        if (empty($allowedIps) || !is_array($allowedIps)) {
            return $next($request);
        }

        $clientIp = Helpers::getClientIp();

        if ($apiKeyRecord->ip_security) {
            if (!in_array($clientIp, $allowedIps)) {
                return response()->json([
                    'success' => false,
                    'status' => 403,
                    'message' => 'Unauthorized IP address'
                ], 403);
            }
        }

        return $next($request);
    }
}
