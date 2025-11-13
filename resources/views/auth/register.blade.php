@extends('auth.layouts.master')
@section('title')
    Register
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
                        <img src="{{ asset('assets/images/logo') . "/" . config('setting.site_logo_light_mode') }}"
                            alt="logo" class="logo-dark-mode" width="200" />
                    </div>
                    <div class="card-body">
                        @include('widgets.form-inline-alerts')
                        @if(config('setting.enable_google_login') == "true")
                            <div class="text-center">
                                <div class="d-grid my-3">
                                    <a href="{{ route('login.social.redirect', 'google') }}" class=" btn mt-2 btn-light-primary
                                                        bg-light text-muted">
                                        <img src="/assets/images/authentication/google.svg" alt="img" /> <span> Sign In with
                                            Google</span>
                                    </a>
                                </div>
                            </div>
                            <div class="saprator my-3">
                                <span>OR</span>
                            </div>
                        @endif
                        <h4 class="text-center f-w-500 mb-3">Sign up with your email</h4>
                        <form action="{{ route('register.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="First Name" name="first_name"
                                            value="{{ old('first_name') }}" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Last Name" name="last_name"
                                            value="{{ old('last_name') }}" required />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email Address" name="email"
                                    value="{{ old('email') }}" required />
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" placeholder="Mobile Number" name="phone"
                                    minlength="10" maxlength="10" value="{{ old('phone') }}" required />
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password"
                                    required />
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Confirm Password"
                                    name="confirm_password" required />
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input input-primary" type="checkbox" id="customCheckc1"
                                        name="terms" checked="" />
                                    <label class="form-check-label text-muted" for="customCheckc1">I agree to all the Terms
                                        &
                                        Conditions</label>
                                </div>
                            </div>
                            <div class="my-5">
                                {!! NoCaptcha::display(['data-callback' => 'recaptchaCallback']) !!}
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary" id="submitBtn"
                                    @if(config('setting.enable_google_recaptcha') == "true") disabled @endif>Sign up</button>
                            </div>
                        </form>
                        <div class="d-flex justify-content-between align-items-end mt-4">
                            <h6 class="f-w-500 mb-0">Already have an Account?</h6>
                            <a href="{{ route('login') }}" class="link-primary">Login here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection