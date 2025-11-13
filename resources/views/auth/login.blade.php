@extends('auth.layouts.master')
@section('title')
    Login
@endsection
@section('main_content')
    @include('widgets.loader')
    <div class="auth-main">
        <div class="auth-wrapper v2">
            <div class="auth-sidecontent">
                <img src="/assets/images/authentication/img-auth-sideimg.jpg" alt="images" class="img-fluid img-auth-side" />
            </div>
            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-header text-center">
                        <img src="{{ asset('assets/images/logo') . '/' . config('setting.site_logo_light_mode') }}"
                            alt="logo" class="logo-dark-mode" width="200" />
                    </div>
                    <div class="card-body">
                        @include('widgets.form-inline-alerts')
                        @if (config('setting.enable_google_login') == 'true')
                            <div class="text-center">
                                <div class="d-grid my-3">
                                    <a href="{{ route('login.social.redirect', 'google') }}""
                                        class=" btn mt-2 btn-light-primary
                                        bg-light text-muted">
                                        <img src="/assets/images/authentication/google.svg" alt="img" /> <span> Sign In
                                            with
                                            Google</span>
                                    </a>
                                </div>
                            </div>
                            <div class="saprator my-3">
                                <span>OR</span>
                            </div>
                        @endif
                        <h4 class="text-center f-w-500 mb-3">Login with your email</h4>
                        <form action="{{ route('login.store') }}" method="POST" id="loginForm">
                            @csrf
                            <div class="mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Email Address"
                                    name="email" value="{{ old('email') }}" required />
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="floatingInput1" placeholder="Password"
                                    name="password" minlength="8" required />
                            </div>

                            <div class="d-flex mt-1 justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input input-primary" type="checkbox" id="rememberTokenCheck"
                                        name="remember_token" />

                                    <label class="form-check-label text-muted" for="rememberTokenCheck">Remember me <i
                                            class="far fa-question-circle fa-fw f-14" data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            data-bs-title="You will be logged in for a longer period of time"></i></label>

                                </div>
                                <h6 class="text-secondary f-w-400 mb-0">
                                    <a href="{{ route('forgot-password') }}"> Forgot Password? </a>
                                </h6>
                            </div>
                            <div class="my-5">
                                {!! NoCaptcha::display(['data-callback' => 'recaptchaCallback']) !!}
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary" id="submitBtn"
                                    @if (config('setting.enable_google_recaptcha') == 'true') disabled @endif>Login</button>
                            </div>
                        </form>
                        <div class="d-flex justify-content-between align-items-end mt-4">
                            <h6 class="f-w-500 mb-0">Don't have an Account?</h6>
                            <a href="{{ route('register') }}" class="link-primary">Create Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
