@extends('landing.layouts.master')
@push('head_css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
@endpush
@section('main_content')
    <!-- [ Technologies ] start -->
    <section id="technologies">
        <div class="container title">
            <div class="row justify-content-center text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-md-8 col-xl-6">
                    <h2 class="mb-3">What we offer</h2>
                    <p class="mb-0">Explore the features of {{ config('setting.site_name') }}</p>
                </div>
            </div>
        </div>
        <div class="container technology-block">
            <!-- Row 1 -->
            <div class="row justify-content-start mb-4 mb-sm-2">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/images/landing/features/dashboard.png" alt="img" class="img-fluid mb-4"
                                width="50" />
                            <h4 class="mb-3 mt-2">Dashboard & Analytics</h4>
                            <p class="text-muted">
                                Powerful admin dashboard to monitor transactions, growth, and payouts..
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/images/landing/features/upi-provider.png" alt="img" class="img-fluid mb-4"
                                width="50" />
                            <h4 class="mb-3 mt-2">Multiple UPI Providers Supported</h4>
                            <p class="text-muted">
                                Link PhonePe Business, Paytm Business, HDFC Vyapar Hub, BharatPe. Many more to come...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/images/landing/features/upi-qr.png" alt="img" class="img-fluid mb-4"
                                width="50" />
                            <h4 class="mb-3 mt-2">UPI Collect & QR Support</h4>
                            <p class="text-muted">
                                Send collect requests or generate dynamic/static QR codes for every order.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/images/landing/features/reconcile.png" alt="img" class="img-fluid mb-4"
                                width="50" />
                            <h4 class="mb-3 mt-2">Auto-reconciliation</h4>
                            <p class="text-muted">
                                Automated success/failure status sync with detailed transaction insights.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/images/landing/features/live.png" alt="img" class="img-fluid mb-4"
                                width="50" />
                            <h4 class="mb-3 mt-2">Live Transactions</h4>
                            <p class="text-muted">
                                Real-time transaction monitoring with comprehensive analytics.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/images/landing/features/api-int.png" alt="img" class="img-fluid mb-4"
                                width="50" />
                            <h4 class="mb-3 mt-2">Easy API Integration</h4>
                            <p class="text-muted">
                                Developer-friendly REST APIs and SDKs for fast and hassle-free integration.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ Technologies ] End -->
    <!-- [ working apps ] start -->
    <section class="bg-primary overflow-hidden">
        <div class="container title">
            <div class="row justify-content-center text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-md-8 col-xl-6">
                    <h2 class="mb-3 text-white">How we empower you</h2>
                    <p class="mb-0 text-white text-opacity-75">
                        Every page has been crafted carefully to ensure you stay informed.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 app_dotsContainer">
                    <a class="app-link wow fadeInUp" data-wow-delay="0.2s" href="#app_1">
                        <h4 class="text-white f-w-500">Dashboard</h4>
                        <p class="mb-0 text-white text-opacity-75">
                            Know everything happening at every time.
                        </p>
                    </a>
                    <a class="app-link wow fadeInUp" data-wow-delay="0.2s" href="#app_2">
                        <h4 class="text-white f-w-500">Live Transactions</h4>
                        <p class="mb-0 text-white text-opacity-75">
                            Monitor real-time transactions effortlessly.
                        </p>
                    </a>
                    <a class="app-link wow fadeInUp" data-wow-delay="0.4s" href="#app_3">
                        <h4 class="text-white f-w-500">Transaction Reports</h4>
                        <p class="mb-0 text-white text-opacity-75">
                            Get detailed insights into your transactions with comprehensive reports.
                        </p>
                    </a>
                </div>
                <div class="col-md-6 position-relative wow fadeInRight" data-wow-delay="0.4s">
                    <div class="owl-carousel owl-theme screen-slide img-app-moke">
                        <div class="item" data-hash="app_1">
                            <img src="{{ asset('assets/images/landing/dash/dash-min.png') }}" alt="img"
                                class="img-fluid rounded" />
                        </div>
                        <div class="item" data-hash="app_2">
                            <img src="{{ asset('assets/images/landing/dash/live-min.png') }}" alt="img"
                                class="img-fluid rounded" />
                        </div>
                        <div class="item" data-hash="app_3">
                            <img src="{{ asset('assets/images/landing/dash/qr-report-min.png') }}" alt="img"
                                class="img-fluid rounded" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ working apps ] End -->
    <!-- [ Applications apps ] start -->
    <section class="bg-white">
        <div class="container title mb-0">
            <div class="row align-items-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-md-8">
                    <h2 class="mb-3"> <span class="text-primary">TRY</span> BEFORE BUY </h2>
                    <p class="text-muted mb-md-0"> We provide a completely free 14-day trial period for you to experience
                        our powerful integrations. </p>
                </div>
                <div class="col-md-4 text-md-end">
                    <a class="btn btn-lg btn-primary m-1" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        href="{{ route('register') }}" target="_blank" title="No credit card required">Start 14-day trial
                        today!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- [ Applications apps ] End -->
    <!-- [ support team apps ] start -->
    <section class="support-team-block d-none">
        <div class="container title">
            <div class="row justify-content-center text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-md-8 col-xl-6">
                    <h2 class="mb-3"> They <span class="text-primary">love</span> {{ config('setting.site_name') }}, Now
                        its your turn 😍 </h2>
                    <!-- prettier-ignore -->
                    <p class="mb-0">We take pride in our work. It brings us joy to share the positive feedback we have
                        received from our loyal
                        clients.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="marquee marquee-text wow fadeInUp" data-wow-delay="0.4s">
                        <ul class="list-inline marquee-list">
                            <li class="list-inline-item">
                                <div class="card support-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/user/avatar-1.jpg" alt="user-image"
                                                    class="rounded-circle wid-60 hei-60" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="mb-1"> “Code quality is amazing. Design is astonishing. very easy
                                                    to customize .. and any developer can use it with ease.“ </p>
                                                <small>shahabblouch - <span class="text-muted">Code Quality</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="card support-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/user/avatar-2.jpg" alt="user-image"
                                                    class="rounded-circle wid-60 hei-60" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="mb-1"> “I get all what I need for my project from this template so
                                                    I can focus to back end side. The template looks fantastic and the
                                                    support is fast. Thank you.“ </p>
                                                <small>menhook - <span class="text-muted">Feature
                                                        Availability</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="card support-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/user/avatar-3.jpg" alt="user-image"
                                                    class="rounded-circle wid-60 hei-60" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="mb-1"> “Design is very good.“ </p>
                                                <small>dimas_ferian - <span class="text-muted">Design Quality</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="card support-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/user/avatar-4.jpg" alt="user-image"
                                                    class="rounded-circle wid-60 hei-60" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="mb-1"> “Amazing template for fast develop“ </p>
                                                <small>devbardbudist - <span
                                                        class="text-muted">Customizability</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="card support-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/user/avatar-5.jpg" alt="user-image"
                                                    class="rounded-circle wid-60 hei-60" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="mb-1"> “The author is very nice and solved my problem inmediately
                                                    “ </p>
                                                <small>richitela - <span class="text-muted">Customer Support</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="card support-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/user/avatar-6.jpg" alt="user-image"
                                                    class="rounded-circle wid-60 hei-60" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="mb-1"> “I love the looks of Able Pro 7.0. I really like the colors
                                                    you guys have chosen for this theme. It looks really nice.. 💎“ </p>
                                                <small>ritelogic - <span class="text-muted">Other</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="card support-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/user/avatar-7.jpg" alt="user-image"
                                                    class="rounded-circle wid-60 hei-60" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="mb-1"> “The author is very nice and solved my problem inmediately
                                                    😍 “ </p>
                                                <small>richitela - <span class="text-muted">Customer Support</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="card support-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/user/avatar-8.jpg" alt="user-image"
                                                    class="rounded-circle wid-60 hei-60" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="mb-1"> “An amazing template, Very good design, good quality code
                                                    and also very good customer support.“ </p>
                                                <small>macugi - <span class="text-muted">Code Quality</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="marquee-1 marquee-text wow fadeInUp" data-wow-delay="0.5s">
                        <ul class="list-inline marquee-list">
                            <li class="list-inline-item">
                                <div class="card support-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/user/avatar-1.jpg" alt="user-image"
                                                    class="rounded-circle wid-60 hei-60" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="mb-1"> “Code quality is amazing. Design is astonishing. very easy
                                                    to customize .. and any developer can use it with ease.“ </p>
                                                <small>shahabblouch - <span class="text-muted">Code Quality</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="card support-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/user/avatar-2.jpg" alt="user-image"
                                                    class="rounded-circle wid-60 hei-60" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="mb-1"> “I get all what I need for my project from this template so
                                                    I can focus to back end side. The template looks fantastic and the
                                                    support is fast. Thank you.“ </p>
                                                <small>menhook - <span class="text-muted">Feature
                                                        Availability</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="card support-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/user/avatar-3.jpg" alt="user-image"
                                                    class="rounded-circle wid-60 hei-60" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="mb-1"> “Design is very good.“ </p>
                                                <small>dimas_ferian - <span class="text-muted">Design Quality</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="card support-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/user/avatar-4.jpg" alt="user-image"
                                                    class="rounded-circle wid-60 hei-60" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="mb-1"> “Amazing template for fast develop“ </p>
                                                <small>devbardbudist - <span
                                                        class="text-muted">Customizability</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="card support-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/user/avatar-5.jpg" alt="user-image"
                                                    class="rounded-circle wid-60 hei-60" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="mb-1"> “The author is very nice and solved my problem inmediately
                                                    “ </p>
                                                <small>richitela - <span class="text-muted">Customer Support</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="card support-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/user/avatar-6.jpg" alt="user-image"
                                                    class="rounded-circle wid-60 hei-60" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="mb-1"> “I love the looks of Able Pro 7.0. I really like the colors
                                                    you guys have chosen for this theme. It looks really nice.. 💎“ </p>
                                                <small>ritelogic - <span class="text-muted">Other</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="card support-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/user/avatar-7.jpg" alt="user-image"
                                                    class="rounded-circle wid-60 hei-60" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="mb-1"> “The author is very nice and solved my problem inmediately
                                                    😍 “ </p>
                                                <small>richitela - <span class="text-muted">Customer Support</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="card support-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/user/avatar-8.jpg" alt="user-image"
                                                    class="rounded-circle wid-60 hei-60" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="mb-1"> “An amazing template, Very good design, good quality code
                                                    and also very good customer support.“ </p>
                                                <small>macugi - <span class="text-muted">Code Quality</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ support team apps ] End -->
    <!-- [ companies apps ] start -->
    <section class="bg-white">
        <div class=" text-center wow fadeInUp" data-wow-delay="0.2s">
            <h2 class="mb-3">
                PROCESSED <span class="text-primary counter" id="statCount">0</span> TRANSACTIONS WITH <span
                    class="text-primary">₹
                    <span class="counter" id="statAmount">0</span></span> AND COUNTING
            </h2>
        </div>
    </section>
    <section class="bg-white">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-12">
                    <h2>Our clients speak volumes</h2>
                    <p class="my-4 wow fadeInUp" data-wow-delay="0.2s">
                        From Startups to High Value Companies, we are trusted by all.
                    </p>
                    <div class="row justify-content-center client-block g-5 mt-4">
                        <div class="col-auto wow fadeInRight" data-wow-delay="0.4s">
                            <img src="https://titozz.in/assets/img/logos/logo.png" alt="img" class="img-fluid w-50" />
                        </div>
                        <div class="col-auto wow fadeInRight" data-wow-delay="0.4s">
                            <img src="https://jhimik.com/assets/img/logos/logo.png" alt="img" class="img-fluid w-50" />
                        </div>
                        <div class="col-auto wow fadeInRight" data-wow-delay="0.4s">
                            <img src="https://divakr.com/assets/img/logos/logo.png" alt="img" class="img-fluid w-50" />
                        </div>
                        <div class="col-auto wow fadeInRight" data-wow-delay="0.5s">
                            <img src="https://fudode.in/assets/img/logos/logo.png" alt="img" class="img-fluid w-50" />
                        </div>
                        <div class="col-auto wow fadeInRight" data-wow-delay="0.6s">
                            <img src="https://lapurecharge.com/new/assets/images/jnt/logo.png" alt="img"
                                class="img-fluid w-50" />
                        </div>
                        <div class="col-auto wow fadeInRight" data-wow-delay="0.7s">
                            <img src="https://renukapay.com/new/assets/images/jnt/logo.png" alt="img"
                                class="img-fluid w-50" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ companies apps ] End -->
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('assets/js/plugins/Jarallax.js') }}"></script>

    <script>
        $(document).ready(function () {

            // Only start counter when #statCount is in view
            let counterStarted = false;
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            function tryStartCounter() {
                if (!counterStarted && isInViewport(document.getElementById('statCount'))) {
                    loadCounter();
                    const counterInterval = setInterval(() => {
                        loadCounter();
                    }, 5 * 1000);
                    counterStarted = true;
                }
            }

            // Check on scroll and on load
            $(window).on('scroll resize', tryStartCounter);
            tryStartCounter();

            let lastCount = 0;
            let lastAmount = 0;

            function animateCounter(element, from, to, duration = 1000) {
                $({ count: from }).animate({ count: to }, {
                    duration: duration,
                    step: function () {
                        $(element).text(Math.floor(this.count));
                    },
                    complete: function () {
                        $(element).text(to);
                    }
                });
            }

            function loadCounter() {
                $.ajax({
                    url: "{{ route('landing.stats.count') }}",
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        if (data.count && data.amount) {
                            if (data.count !== lastCount) {
                                animateCounter('#statCount', lastCount, data.count);
                                lastCount = data.count;
                            }

                            if (data.amount !== lastAmount) {
                                animateCounter('#statAmount', lastAmount, data.amount);
                                lastAmount = data.amount;
                            }
                        } else {
                            console.error("Invalid data received:", data);
                        }
                    },
                    error: function (xhr) {
                        console.error("Failed to fetch stats:", xhr.responseText);
                    }
                });
            }


            function loadCounter1() {
                $.ajax({
                    url: "{{ route('landing.stats.count') }}",
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        if (data.count && data.amount && data.businesses) {
                            if (data.count !== lastCount) {
                                $('#statCount').text(data.count).counterUp({
                                    delay: 10,
                                    time: 1000,
                                    start: lastCount
                                });
                                lastCount = data.count;
                            }

                            if (data.amount !== lastAmount) {
                                $('#statAmount').text(data.amount).counterUp({
                                    delay: 10,
                                    time: 1000
                                });
                                lastAmount = data.amount;
                            }

                            if (data.businesses !== lastBusinesses) {
                                $('#statBusinesses').text(data.businesses).counterUp({
                                    delay: 10,
                                    time: 1000
                                });
                                lastBusinesses = data.businesses;
                            }
                        } else {
                            console.error("Invalid data received:", data);
                        }
                    },
                    error: function (xhr) {
                        console.error("Failed to fetch stats:", xhr.responseText);
                    }
                });
            }

        });
    </script>
    <script>
        // Start [ Menu hide/show on scroll ]
        let ost = 0;
        document.addEventListener('scroll', function () {
            let cOst = document.documentElement.scrollTop;
            if (cOst == 0) {
                document.querySelector('.navbar').classList.add('top-nav-collapse');
            } else if (cOst > ost) {
                document.querySelector('.navbar').classList.add('top-nav-collapse');
                document.querySelector('.navbar').classList.remove('default');
            } else {
                document.querySelector('.navbar').classList.add('default');
                document.querySelector('.navbar').classList.remove('top-nav-collapse');
            }
            ost = cOst;
        });
        // End [ Menu hide/show on scroll ]
        //
        new SimpleBar(document.querySelector('.scrollble-tech-block'));
        var wow = new WOW({
            animateClass: 'animated'
        });
        wow.init();

        // slider start
        $('.screen-slide').owlCarousel({
            loop: true,
            margin: 30,
            center: true,
            nav: false,
            dotsContainer: '.app_dotsContainer',
            URLhashListener: true,
            items: 1
        });
        $('.workspace-slider').owlCarousel({
            loop: true,
            margin: 30,
            center: true,
            nav: false,
            dotsContainer: '.workspace-card-block',
            URLhashListener: true,
            items: 1.5
        });
        // slider end
        // marquee start
        $('.marquee').marquee({
            duration: 500000,
            pauseOnHover: true,
            startVisible: true,
            duplicated: true
        });
        $('.marquee-1').marquee({
            duration: 500000,
            pauseOnHover: true,
            startVisible: true,
            duplicated: true,
            direction: 'right'
        });
        // marquee end
    </script>
@endpush