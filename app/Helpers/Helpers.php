<?php

namespace App\Helpers;

use App\Models\Attachment;
use App\Models\Country;
use App\Models\LinkedMerchant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Ixudra\Curl\Facades\Curl;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Zxing\QrReader;

class Helpers
{
  public static function isUserLogin()
  {
    return auth()?->check();
  }

  public static function getCurrentUserId()
  {
    if (self::isUserLogin()) {
      return auth()?->user()?->id;
    }
  }

  public static function getMedia($id)
  {
    return Attachment::find($id);
  }

  public static function getCountryCode()
  {
    return Country::get(["calling_code", "id", "iso_3166_2", 'flag'])->unique('calling_code');
  }

  public static function getUser()
  {
    $user = User::with('roles')->where('system_reserve', '!=', 1)->latest()->take(5)->get();
    return $user;
  }

    public static function getClientIp($request = null)
  {
    // Use provided request if available, otherwise fallback
    if ($request) {
      return $request->ip();
    }

    // If behind Cloudflare
    if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
      $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
      if (filter_var($ip, FILTER_VALIDATE_IP)) {
        return $ip;
      }
    }

    // Check common proxy headers
    foreach (
      [
        'HTTP_CLIENT_IP',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_X_CLUSTER_CLIENT_IP',
        'HTTP_FORWARDED_FOR',
        'HTTP_FORWARDED',
        'REMOTE_ADDR'
      ] as $key
    ) {
      if (array_key_exists($key, $_SERVER)) {
        foreach (explode(',', $_SERVER[$key]) as $ip) {
          $ip = trim($ip);
          if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
            return $ip;
          }
        }
      }
    }

    // Laravel fallback (works if request exists in container)
    try {
      return request()->ip();
    } catch (\Exception $e) {
      return null; // or '0.0.0.0' / 'server'
    }
  }

}