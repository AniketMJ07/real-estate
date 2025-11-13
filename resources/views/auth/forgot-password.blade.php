@extends('auth.layouts.master')
@section('title')
    Forgot Password
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
                        <div class="d-flex justify-content-between align-items-end mb-4">
                            <h3 class="mb-0"><b>Forgot Password</b></h3>
                            <a href="{{ route('login') }}" class="link-primary">Back to Login</a>
                        </div>
                        <form action="{{ route('forgot-password.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="floatingInput" placeholder="Email Address"
                                    name="email" />
                            </div>
                            <p class="mt-4 text-sm text-muted">Do not forget to check SPAM box.</p>
                            <div class="my-5">
                                {!! NoCaptcha::display(['data-callback' => 'recaptchaCallback']) !!}
                            </div>
                            <div class="d-grid mt-3">
                                <button type="submit" class="btn btn-primary" id="submitBtn" @if(config('setting.enable_google_recaptcha') == "true")
                                disabled @endif>Send Password Reset Email</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection