<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    @include('layouts.css')
    @stack('head_scripts')
    @stack('head_css')
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
    {!! NoCaptcha::renderJs() !!}
</head>

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme_contrast=""
    data-pc-theme="light" class="landing-page">
    @if(request()->path() === '/')
        @include('landing.layouts.home_header')
    @else
        @include('landing.layouts.header')
    @endif
    @yield('main_content')

    @include('landing.layouts.footer')
    @include('layouts.js')
    @include('widgets.toast')
    @stack('modals')
    @stack('scripts')
</body>

</html>