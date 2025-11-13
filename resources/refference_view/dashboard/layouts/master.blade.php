<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    @include('layouts.css')
    @stack('head_scripts')
    @stack('head_css')
    @stack('styles')
</head>

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
    data-pc-theme_contrast="" data-pc-theme="light">
    @include('layouts.sidebar')
    @include('layouts.header')
    @yield('main_content')

    @include('layouts.footer')
    @include('layouts.js')
    @include('widgets.toast')
    @stack('modals')
    @stack('scripts')
</body>

</html>