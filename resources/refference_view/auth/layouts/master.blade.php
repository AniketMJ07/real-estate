<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    @include('layouts.css')
    @include('layouts.js')
    {!! NoCaptcha::renderJs() !!}
</head>

<body>
    @yield('main_content')
    @include('widgets.toast')
    <script>
        $(document).ready(function () {
            window.recaptchaCallback = function () {
                document.getElementById('submitBtn').disabled = false;
            };
        });
    </script>
    @stack('modals')
    @stack('scripts')
</body>

</html>