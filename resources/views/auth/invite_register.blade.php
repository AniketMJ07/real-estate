@extends('auth.layouts.master')
@section('title')
    Accept Invitation
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
                        <h4 class="f-w-500 mb-3">You've been invited to <strong>{{ $business->name }}</strong> as a
                            {{ strtoupper($invite->role) }}
                        </h4>
                        <p class="text-muted mb-4">Please fill in the details below to complete your registration.</p>
                        <form action="{{ route('invite.register.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $invite->token }}" />
                            <input type="hidden" name="business_id" value="{{ $invite->business_id }}" />
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="First Name" name="first_name"
                                            value="{{ old('first_name') }}" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Last Name" name="last_name"
                                            value="{{ old('last_name') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email Address" name="email"
                                    value="{{ $invite->email }}" readonly />
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" placeholder="Mobile Number" name="phone"
                                    minlength="10" maxlength="10" value="{{ old('phone') }}" />
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password"
                                    minlength="8" />
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Confirm Password"
                                    name="confirm_password" minlength="8" />
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input input-primary" type="checkbox" id="customCheckc1"
                                        name="terms" checked="" />
                                    <label class="form-check-label text-muted" for="customCheckc1">I agree to all the Terms
                                        &
                                        Condition</label>
                                </div>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection