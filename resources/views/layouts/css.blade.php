@foreach (glob(public_path('assets/css/plugins/*.css')) as $cssFile)
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/' . basename($cssFile)) }}">
@endforeach

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link" />
<link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/uikit.css') }}" />
{{--
<link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}" /> --}}
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />

<link rel="stylesheet" href="{{ asset('assets/fonts/inter/inter.css') }}" id="main-font-link" />
<link rel="stylesheet" href="{{ asset('assets/fonts/phosphor/duotone/style.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/toastr.css') }}" />
<link rel="stylesheet" href="https://unpkg.com/intro.js/introjs.css" />
@yield('css')