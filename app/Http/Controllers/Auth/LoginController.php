<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function authenticated($status = null, $message = null)
    {
        $user = auth()->user();
        $system_role = $user->system_role;
        if ($system_role == null) {
            $system_role = User::find($user->id)->system_role;
        }
        if ($user && $system_role == "user") {
            if ($user->businesses()->exists() && $user->businesses->count() > 0) {
                if ($user->default_business_id != null) {
                    Session::put('selected_business_id', $user->default_business_id);
                } else {
                    Session::put('selected_business_id', $user->businesses->first()->id);
                }
                return redirect()->intended(route('dashboard'))->with($status, $message);
            } else {
                return redirect()->to(route('business.create'));
            }
        } elseif ($user && $system_role == "admin") {
            return redirect()->route('admin.dashboard');
        } else {
            Auth::logout();
            return redirect()->route('login')->with('error', 'Something went wrong. Err: USR_SYS_ROLE. Please try again.');
        }
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        try {
            $validateRules = [
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:8'
            ];
            if (config('setting.enable_google_recaptcha') == "true") {
                $validateRules['g-recaptcha-response'] = 'required|captcha';
            }
            $request->validate($validateRules);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        }

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'Email not found. Please check your email or register.')->withInput(['email' => $request->email]);
        }

        if ($user->email_verified_at === null) {
            return redirect()->back()->withInput(['email' => $request->email])->with('error', 'Please verify your email before logging in.');
        }

        
        if (Hash::check($request->password, $user->password)) {
            auth()->login($user, $request->has('remember_token'));
        } else {
            return redirect()->back()->with('error', 'Incorrect password. Please try again.')->withInput(['email' => $request->email]);
        }

        return $this->authenticated();
    }

    public function socialLogin($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function socialCallback($provider)
    {
        $socialUser = Socialite::driver($provider)->user();

        $user = User::where('email', $socialUser->getEmail())->first();
        if (!$user) {
            $name = explode(' ', $socialUser->getName());
            $firstName = $name[0] ?? '';
            $lastName = isset($name[1]) ? implode(' ', array_slice($name, 1)) : '';
            $user = User::create([
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $socialUser->getEmail(),
                'password' => Hash::make(Str::random(16)),
                'email_verified_at' => now(),
                'is_active' => true,
            ]);
        }

        if ($user->email_verified_at === null) {
            $user->email_verified_at = now();
            $user->save();
        }

        auth()->login($user, true);

        return $this->authenticated();
    }

    public function logout()
    {
        auth()->logout();
        return redirect(route('login'))->with('status', 'You have been logged out successfully.');
    }
}
