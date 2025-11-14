@include('widgets.loader')
@push('head_css')
    <style>
        .hero-bg-gradient {
            --bg-size: 400%;
            --color-one: rgb(37, 161, 244);
            --color-two: rgb(249, 31, 169);
            background: linear-gradient(90deg,
                    var(--color-one),
                    var(--color-two),
                    var(--color-one)) 0 0 / var(--bg-size) 100%;
            color: white;
            /* -webkit-background-clip: text; */
            /* background-clip: text; */
            animation: move-bg 24s infinite linear;
        }
    </style>
@endpush
<header id="home" style="background-image: url(assets/images/landing/img-headerbg.jpg)">
    <nav class="navbar navbar-expand-md navbar-light default">
        <div class="container">
            <div class="d-inline-flex align-items-center">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo/' . config('setting.site_logo_light_mode')) }}" alt="logo"
                        width="100" />
                </a>
            </div>
            <button class="navbar-toggler rounded" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item px-1 tech-link">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    {{-- <li class="nav-item px-1 tech-link">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li> --}}
                    <li class="nav-item px-1 tech-link">
                        <a class="nav-link" href="">Pricing</a>
                    </li>
                    <li class="nav-item px-1 tech-link">
                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                    
                        <li class="nav-item px-1">
                            <a class="btn btn btn-outline-primary" href="{{ route('login') }}">Sign In</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="btn btn btn-primary btn-buy" href="{{ route('register') }}">Start 14-day
                                trial</a>
                        </li>
                   
                </ul>
            </div>
        </div>
    </nav>
    
</header>