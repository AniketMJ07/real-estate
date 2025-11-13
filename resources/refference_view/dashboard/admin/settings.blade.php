@extends('layouts.master')
@section('title')
Settings
@endsection
@section('main_content')
@include('widgets.loader')
<div class="pc-container">
    <div class="pc-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                            <li class="breadcrumb-item active" aria-current="page">SETTINGS</li>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">SETTINGS</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{ route('admin.settings.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Site Settings</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-3 form-group">
                                        <label for="site_name">Site Name</label>
                                        <input type="text" class="form-control" id="site_name" name="site_name"
                                            value="{{ config('setting.site_name') }}" placeholder="Enter site name">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3 form-group">
                                        <label for="site_keywords">Site Keywords</label>
                                        <input type="text" class="form-control" id="site_keywords" name="site_keywords"
                                            value="{{ config('setting.site_keywords') }}"
                                            placeholder="Enter site keywords for meta purpose">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-3 form-group">
                                        <label for="site_description">Site Description</label>
                                        <textarea class="form-control" id="site_description" name="site_description"
                                            rows="3"
                                            placeholder="Enter site description">{{ config('setting.site_description') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3 form-group">
                                        <img src="{{ asset('assets/images/meta/meta_image.png') }}" alt="Site Meta Image"
                                            class="img-fluid mb-2" style="max-width: 200px;" id="site_meta_image_preview">
                                        <br>
                                        <label for="site_meta_image">Site Meta Image</label>
                                        <input type="file" class="form-control" id="site_meta_image" name="site_meta_image"
                                            value=""
                                            placeholder="Upload site meta image" accept="image/png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Theme Settings</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="mb-3 form-group">
                                        <img src="{{ asset('assets/images/logo/' . config('setting.site_logo_dark_mode')) }}" alt="Site Logo Dark Mode"
                                            class="img-fluid mb-2" style="max-width: 200px;" id="site_logo_dark_mode_preview">
                                        <br>
                                        <label for="site_logo_dark_mode">Site Logo (Dark Mode)</label>
                                        <input type="file" class="form-control" id="site_logo_dark_mode" name="site_logo_dark_mode"
                                            value=""
                                            placeholder="Select Site Logo for Dark Mode" accept="image/png">
                                        <small class="form-text text-muted">Upload a logo for dark mode. Recommended
                                            size is
                                            300x100 pixels.</small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="mb-3 form-group">
                                        <img src="{{ asset('assets/images/logo/' . config('setting.site_logo_light_mode')) }}" alt="Site Logo Light Mode"
                                            class="img-fluid mb-2" style="max-width: 200px;" id="site_logo_light_mode_preview">
                                        <br>
                                        <label for="site_logo_light_mode">Site Logo (Light Mode)</label>
                                        <input type="file" class="form-control" id="site_logo_light_mode" name="site_logo_light_mode"
                                            value=""
                                            placeholder="Select Site Logo for Light Mode" accept="image/png">
                                        <small class="form-text text-muted">Upload a logo for light mode. Recommended
                                            size
                                            is
                                            300x100 pixels.</small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="mb-3 form-group">
                                        <img src="{{ asset('assets/images/logo/' . config('setting.site_favicon')) }}" alt="Site Favicon"
                                            class="img-fluid mb-2" style="max-width: 200px;" id="site_favicon_preview">
                                        <br>
                                        <label for="site_favicon">Site Favicon</label>
                                        <input type="file" class="form-control" id="site_favicon" name="site_favicon"
                                            value=""
                                            placeholder="Select Site Favicon" accept="image/png">
                                        <small class="form-text text-muted">Upload a favicon. Recommended
                                            size
                                            is
                                            512x512 pixels.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-3 form-group">
                                        <label for="theme_color_primary">Theme Color (Primary)</label>
                                        <input type="color" class="form-control form-control-color" id="theme_color_primary"
                                            name="theme_color_primary" value="{{ config('setting.theme_color_primary') }}"
                                            placeholder="Select primary theme color">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3 form-group">
                                        <label for="theme_color_secondary">Theme Color (Secondary)</label>
                                        <input type="color" class="form-control form-control-color"
                                            id="theme_color_secondary" name="theme_color_secondary"
                                            value="{{ config('setting.theme_color_secondary') }}"
                                            placeholder="Select secondary theme color">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h5>Mail Settings</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="mail_driver">Mail Driver</label>
                                    <input type="text" class="form-control" id="mail_driver" name="MAIL_MAILER"
                                        value="{{ env("MAIL_MAILER") }}"
                                        placeholder="Enter mail driver (smtp, sendmail, etc.)">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="mail_host">Mail Host</label>
                                    <input type="text" class="form-control" id="mail_host" name="MAIL_HOST"
                                        value="{{ env("MAIL_HOST") }}"
                                        placeholder="Enter mail host (e.g., smtp.example.com)">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="mail_port">Mail Port</label>
                                    <input type="text" class="form-control" id="mail_port" name="MAIL_PORT"
                                        value="{{ env("MAIL_PORT") }}" placeholder="Enter mail port (e.g., 587)">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="mail_username">Mail Username</label>
                                    <input type="text" class="form-control" id="mail_username" name="MAIL_USERNAME"
                                        value="{{ env("MAIL_USERNAME") }}" placeholder="Enter mail username">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="mail_password">Mail Password</label>
                                    <input type="password" class="form-control" id="mail_password" name="MAIL_PASSWORD"
                                        value="{{ env("MAIL_PASSWORD") }}" placeholder="Enter mail password">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="mail_encryption">Mail Encryption</label>
                                    <input type="text" class="form-control" id="mail_encryption" name="MAIL_ENCRYPTION"
                                        value="{{ env("MAIL_ENCRYPTION") }}"
                                        placeholder="Enter mail encryption (tls, ssl, etc.)">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="mail_from_address">Mail From Address</label>
                                    <input type="email" class="form-control" id="mail_from_address" name="MAIL_FROM_ADDRESS"
                                        value="{{ env("MAIL_FROM_ADDRESS") }}" placeholder="Enter mail from address">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="mail_from_name">Mail From Name</label>
                                    <input type="text" class="form-control" id="mail_from_name" name="MAIL_FROM_NAME"
                                        value="{{ env("MAIL_FROM_NAME") }}" placeholder="Enter mail from name">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Social Login Settings</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-check form-switch custom-switch-v1 mb-2">
                                        <label class="form-check-label" for="customswitchv2-1">Enable Google Login</label>
                                        <input type="checkbox"
                                            name="enable_google_login"
                                            class="form-check-input input-primary"
                                            id="customswitchv2-1" @if(config('setting.enable_google_login')=="true" ) checked @endif />
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="mb-3 form-group">
                                        <label for="google_login_app_id">Google Client ID</label>
                                        <input type="text" class="form-control" id="google_login_app_id"
                                            name="GOOGLE_LOGIN_APP_ID"
                                            value="{{ env("GOOGLE_LOGIN_APP_ID") }}"
                                            placeholder="Enter Google Client ID">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="mb-3 form-group">
                                        <label for="google_login_app_secret">Google Client Secret</label>
                                        <input type="text" class="form-control" id="google_login_app_secret"
                                            name="GOOGLE_LOGIN_APP_SECRET"
                                            value="{{ env("GOOGLE_LOGIN_APP_SECRET") }}"
                                            placeholder="Enter Google Client Secret">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Google Recaptcha Settings</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-check form-switch custom-switch-v1 mb-2">
                                        <label class="form-check-label" for="customswitchv2-1">Enable Google Recaptcha</label>
                                        <input type="checkbox"
                                            name="enable_google_recaptcha"
                                            class="form-check-input input-primary"
                                            id="customswitchv2-1" @if(config('setting.enable_google_recaptcha')=="true" )checked @endif />
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="mb-3 form-group">
                                        <label for="google_recaptcha_site_key">Google Recaptcha Site Key</label>
                                        <input type="text" class="form-control" id="google_recaptcha_site_key"
                                            name="RECAPTCHA_SITE_KEY"
                                            value="{{ env("RECAPTCHA_SITE_KEY") }}"
                                            placeholder="Enter Google Recaptcha Site Key">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="mb-3 form-group">
                                        <label for="google_recaptcha_secret_key">Google Recaptcha Secret Key</label>
                                        <input type="password" class="form-control" id="google_recaptcha_secret_key"
                                            name="RECAPTCHA_SECRET_KEY"
                                            value="{{ env("RECAPTCHA_SECRET_KEY") }}"
                                            placeholder="Enter Google Recaptcha Secret Key">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Analytics and Chat Settings</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="mb-3 form-group">
                                        <label for="google_analytics_id">Google Analytics ID</label>
                                        <input type="text" class="form-control" id="google_analytics_id"
                                            name="google_analytics_id"
                                            value="{{ config('setting.google_analytics_id') }}"
                                            placeholder="Enter Google Analytics ID">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="mb-3 form-group">
                                        <label for="ms_clarity_project_id">Microsoft Clarity Project ID</label>
                                        <input type="text" class="form-control" id="ms_clarity_project_id"
                                            name="ms_clarity_project_id"
                                            value="{{ config('setting.ms_clarity_project_id') }}"
                                            placeholder="Enter Microsoft Clarity Project ID">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="row">
                                        <div class="form-check form-switch custom-switch-v1 mb-2">
                                        <label class="form-check-label" for="customswitchv2-1">Enable Tawk.to Chat</label>
                                        <input type="checkbox"
                                            name="tawk_to_status"
                                            class="form-check-input input-primary"
                                            id="customswitchv2-1" @if(config('setting.tawk_to_status')=="true" ) checked @endif />
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="tawk_to_prop_id">Tawk.to Property ID</label>
                                        <input type="text" class="form-control" id="tawk_to_prop_id"
                                            name="tawk_to_prop_id"
                                            value="{{ config('setting.tawk_to_prop_id') }}"
                                            placeholder="Enter Tawk.to Property ID">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Order Settings</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="mb-3 form-group">
                                        <label for="default_upi_api_key">Default Payment Business API Key</label>
                                        <input type="text" class="form-control" id="default_upi_api_key"
                                            name="default_upi_api_key"
                                            value="{{ config('setting.default_upi_api_key') }}"
                                            placeholder="Enter Default Payment Business API Key">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 d-flex align-items-center text-center">
                                    <div class="form-check form-switch custom-switch-v1 mb-2">
                                        <label class="form-check-label" for="customswitchv2-1">Allow GST Billing</label>
                                        <input type="checkbox"
                                            name="gst_billing_status"
                                            class="form-check-input input-primary"
                                            id="customswitchv2-1" @if(config('setting.gst_billing_status')=="true" ) checked @endif />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Media Upload Settings</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="mb-3 form-group">
                                        <label for="imgbb_api_key">ImgBB API Key</label>
                                        <input type="text" class="form-control" id="imgbb_api_key"
                                            name="imgbb_api_key"
                                            value="{{ config('setting.imgbb_api_key') }}"
                                            placeholder="Enter ImgBB API Key">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Verification Settings</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="mb-3 form-group">
                                        <label for="aadhaar_verification">Aadhar Verification</label>
                                        <input type="checkbox"
                                            name="aadhaar_verification"
                                            class="form-check-input input-primary"
                                            id="customswitchv2-1" @if(config('setting.aadhaar_verification')=="true" ) checked @endif />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    <a href="{{ route('admin.settings.reload-octane') }}" class="btn btn-secondary float-end">Reload Octane</a>
                    <button type="submit" class="btn btn-primary float-end">Save Settings</button>
                </div>
            </div>
        </form>


        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Merchant Provider Settings</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @php
                            $merchantProviders = \App\Models\MerchantProvider::get(); // or ::get()->first()
                            @endphp

                            @foreach($merchantProviders as $provider)
                            <div class="col-12 col-md-6 mb-2">
                                <div class="form-check form-switch custom-switch-v1 mb-2">
                                    <label class="form-check-label mx-2" for="provider-{{ $provider->id }}">{{ $provider->name }}</label>
                                    <input
                                        type="checkbox"
                                        name="providers[{{ $provider->id }}]"
                                        class="form-check-input input-primary provider-toggle"
                                        data-id="{{ $provider->id }}"
                                        id="provider-{{ $provider->id }}"
                                        {{ $provider->is_active ? 'checked' : '' }}>
                                </div>
                            </div>
                            @endforeach


                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {

        $('#site_meta_image').on('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#site_meta_image_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
        $('#site_logo_light_mode').on('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#site_logo_light_mode_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(file);
            }
        });

        $('#site_logo_dark_mode').on('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#site_logo_dark_mode_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.provider-toggle').on('change', function() {
            let providerId = $(this).data('id');
            let isActive = $(this).is(':checked') ? 1 : 0;

            
            $.ajax({
               url: "{{ route('admin.merchant-provider.toggle') }}", // define this route
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: providerId,
                    is_active: isActive
                },
                success: function(response) {
                    console.log(response.message);
                     toastr.success(response.message);
                },
                error: function(xhr) {
                    alert('Something went wrong');
                }
            });

            $('#site_favicon').on('change', function () {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        $('#site_favicon_preview').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    });
</script>

@endpush