@extends('auth.layouts.master')
@section('title')
    Reset Password
@endsection
@section('main_content')
    @include('widgets.loader')
    <div class="auth-main">
        <div class="auth-wrapper v2">
            <div class="auth-sidecontent">
                <img src="/assets/images/authentication/img-auth-sideimg.jpg" alt="images"
                    class="img-fluid img-auth-side" />
            </div>
            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-header text-center">
                        <img src="{{ asset('assets/images/logo') . "/" . config('setting.site_logo_light_mode') }}" alt="logo"
                            class="logo-dark-mode" width="200" />
                    </div>
                    <div class="card-body">
                        @include('widgets.form-inline-alerts')
                        <form action="{{ route('reset-password.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <input type="hidden" name="email" value="{{ $email }}">
                            <div class="mb-4">
                                <h3 class="mb-2"><b>Reset Password</b></h3>
                                <p class="text-muted">Please choose your new password</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" id="floatingInput" placeholder="Password"
                                    name="password" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="floatingInput1"
                                    placeholder="Confirm Password" name="confirm_password" />
                            </div>
                            <div class="my-5">
                                {!! NoCaptcha::display(['data-callback' => 'recaptchaCallback']) !!}
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary" id="submitBtn" @if(config('setting.enable_google_recaptcha') == "true")
                                disabled @endif>Reset Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection