<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="{{ config('setting.site_description') }}">
<meta name="keywords" content="{{ config('setting.site_keywords') }}">
<meta name="author" content="ableprolaravel">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" href="{{ asset('assets/images/logo/' . config('setting.site_favicon')) }}">
<link rel="shortcut icon" href="{{ asset('assets/images/logo/' . config('setting.site_favicon')) }}">
<meta property="og:type" content="website">
<meta property="og:url" content="https://{{ env('APP_URL') }}">
<meta property="og:title" content="{{ config('setting.site_name') }}">
<meta property="og:description" content="{{ config('setting.site_description') }}">
<meta property="og:image" content="{{ asset('assets/images/meta/meta_image.png') }}">
<meta property="og:image:width" content="1920">
<meta property="og:image:height" content="1080">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="https://{{ env('APP_URL') }}">
<meta name="twitter:title" content="{{ config('setting.site_name') }}">
<meta name="twitter:description" content="{{ config('setting.site_description') }}">
<meta name="twitter:image" content="{{ asset('assets/images/meta/meta_image.png') }}">
<title>
    @if (View::hasSection('title'))
        @yield('title') | {{ config('setting.site_name') }}
    @else
        {{ config('setting.site_name') }}
    @endif
</title>

<!-- Google font-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&amp;display=swap"
    rel="stylesheet">
@if (!auth()->user() || auth()->user()->system_role == 'user')
    @include('widgets.g_analytics')
@endif
@if (config('setting.tawk_to_status') == 'true' && config('setting.tawk_to_prop_id') != '' && !Str::contains(request()->path(), ['admin', 'gateway']))
    @include('widgets.tawk_to')
@endif