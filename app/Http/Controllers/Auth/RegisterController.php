<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function index()
    {
        return view('auth.register');
    }

    public function changePhoneNumberAvailable(Request $request)
    {
        try {
            $request->validate([
                'phone' => 'required|string|min:10,max:10',
            ]);
        } catch (ValidationException $e) {
            return response()->json(['success' => false, 'message' => $e->validator->errors()->first()], 422);
        }

        $user = User::where('phone', $request->phone)->first();
        if ($user) {
            return response()->json(['success' => true, 'available' => false, 'message' => 'Phone number already exists.'], 200);
        }

        return response()->json(['success' => true, 'available' => true], 200);
    }

    public function store(Request $request)
    {
        try {
            $validateRules = [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'phone' => 'required|string|min:10|max:10',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
                'confirm_password' => 'required|string|same:password',
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
        if ($user) {
            return redirect()->back()
                ->with('error', 'Email already exists. Please use a different email address.')
                ->withInput([
                    'email' => $request->email,
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'phone' => $request->phone
                ]);
        }

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $this->sendVerificationTokenEmail($user->email);

        return redirect()->route('login')->with('status', 'Registration successful. Please verify your email to continue.');
    }

    public function verify_email(Request $request)
    {
        $token = $request->input('token');

        if (!$token) {
            return redirect()->route('login')->with('error', 'Invalid verification token.');
        }

        $resetToken = DB::table('password_reset_tokens')->where('token', $token)->first();

        if (!$resetToken) {
            return redirect()->route('login')->with('error', 'Invalid verification token.');
        }

        $user = User::where('email', $resetToken->email)->first();

        if (!$user) {
            return redirect()->route('login')->with('error', 'User not found.');
        }

        $user->email_verified_at = now();
        $user->save();

        DB::table('password_reset_tokens')->where('email', $resetToken->email)->delete();

        return redirect()->route('login')->with('status', 'Email verified successfully. You can now log in.');
    }

    public function sendVerificationTokenEmail($email)
    {
        $token = Str::random(60);

        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $email],
            ['token' => $token, 'expires_at' => null, 'updated_at' => now()]
        );

        $mailData = [
            'first_name' => User::where('email', $email)->value('first_name'),
            'token' => $token,
            'email' => $email,
            'route' => route('verify-email', ['token' => $token])
        ];
        $mail = $email;

        Mail::send('email.verify_email', ['data' => $mailData], function ($email) use ($mail) {
            $email->subject("Verify Email Address on " . config("setting.site_name"));
            $email->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $email->to($mail);
        });

        return true;
    }


}
