@extends('auth.layouts.master')
@section('title')
    Forgot Password Mail Sent
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
                        <div class="mb-4">
                            <h3 class="mb-2"><b>Hi, Check Your Mail</b></h3>
                            <p class="text-muted">We have sent a password recover instructions to your email.</p>
                        </div>
                        <div class="d-grid mt-3">
                            <a href="{{ route('login') }}" class="btn btn-primary">Sign in</a>
                        </div>
                        <div class="saprator mt-3">
                            <span>Sign up with</span>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('login.social.redirect', 'google') }}"
                                    class="btn mt-2 btn-light-primary bg-light text-muted">
                                    <img src="/assets/images/authentication/google.svg" alt="img" />
                                    <span class="d-none d-sm-inline-block"> Google</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection