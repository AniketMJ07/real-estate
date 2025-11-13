<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class PasswordResetController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function forget_index()
    {
        return view('auth.forgot-password');
    }

    public function forget_store(Request $request)
    {
        try {
            $validateRules = [
                'email' => 'required|email',
            ];
            if (config('setting.enable_google_recaptcha') == "true") {
                $validateRules['g-recaptcha-response'] = 'required|captcha';
            }
            $request->validate($validateRules);
        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        }

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'Email not found.']);
        }

        $this->sendPasswordResetNotification($user->email);

        return redirect()->route('forgot-password.success')->with(['success', 'Password reset link has been sent to your email.', 'email' => $user->email]);
    }

    public function reset_index(Request $request)
    {
        $token = $request->query('token');
        if (!$token) {
            return redirect()->route('login')->withErrors(['error' => 'Invalid or missing token.']);
        }
        $tokenRecord = DB::table('password_reset_tokens')
            ->where('token', $token)
            ->first();
        if (!$tokenRecord) {
            return redirect()->route('login')->withErrors(['error' => 'Invalid or expired token.']);
        }

        if ($tokenRecord->expires_at && $tokenRecord->expires_at < now()) {
            $this->sendPasswordResetNotification($tokenRecord->email);
            return redirect()->route('login')->withErrors(['error' => 'Token has expired. We have sent a new password reset link to your email.']);
        }

        return view('auth.reset-password', [
            'email' => $tokenRecord->email,
            'token' => $token,
        ]);
    }

    public function reset_store(Request $request)
    {
        try {
            $validateRules = [
                'email' => 'required|email',
                'password' => 'required|min:8',
                'confirm_password' => 'required|same:password',
                'token' => 'required',
            ];
            if (config('setting.enable_google_recaptcha') == "true") {
                $validateRules['g-recaptcha-response'] = 'required|captcha';
            }
            $request->validate($validateRules);
        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput()
                ->with('error', 'Validation failed. Please check your input.');
        }

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'Email not found.'])->with('error', 'Email not found.');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login')->with('success', 'Password has been reset successfully.');
    }

    private function sendPasswordResetNotification($email)
    {
        $token = Str::random(60);
        $expiresAt = now()->addMinutes(60);

        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $email],
            ['token' => $token, 'expires_at' => $expiresAt, 'updated_at' => now()]
        );

        $mailData = [
            'first_name' => User::where('email', $email)->value('first_name'),
            'token' => $token,
            'email' => $email,
            'route' => route('reset-password', ['token' => $token])
        ];

        Mail::send(('email.password_reset'), ['data' => $mailData], function ($mail) use ($email) {
            $mail->subject("Forgot Password Request on " . config("setting.site_name"));
            $mail->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->to($email);
        });

        return true;
    }

    public function forget_success()
    {
        if (session()->has('email')) {
            return view('auth.forgot-password-check-mail', [
                'email' => session('email'),
            ]);
        } else {
            return redirect()->route('login')->with('error', 'Email not register/found.')->withErrors(['email' => 'No email found in session.']);
        }
    }
}
