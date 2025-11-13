<?php echo $__env->make('widgets.loader', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->startPush('head_css'); ?>
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
<?php $__env->stopPush(); ?>
<header id="home" style="background-image: url(assets/images/landing/img-headerbg.jpg)">
    <nav class="navbar navbar-expand-md navbar-light default">
        <div class="container">
            <div class="d-inline-flex align-items-center">
                <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                    <img src="<?php echo e(asset('assets/images/logo/' . config('setting.site_logo_light_mode'))); ?>" alt="logo"
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
                        <a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a>
                    </li>
                    
                    <li class="nav-item px-1 tech-link">
                        <a class="nav-link" href="">Pricing</a>
                    </li>
                    <li class="nav-item px-1 tech-link">
                        <a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact Us</a>
                    </li>
                    <?php if(auth()->user()): ?>
                        <li class="nav-item">
                            <a class="btn btn btn-primary" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item px-1">
                            <a class="btn btn btn-outline-primary" href="<?php echo e(route('login')); ?>">Sign In</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="btn btn btn-primary btn-buy" href="<?php echo e(route('register')); ?>">Start 14-day
                                trial</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center align-items-center" style="cursor: default !important;">
                <div class="btn hero-bg-gradient p-3 rounded-pill mb-3 wow fadeInUp text-light"
                    style="cursor: default !important;">
                    <span class="btn btn-outline-light f-16" style="cursor: default !important;">
                        New 🎉
                    </span>
                    <span class="ms-2 f-16">
                        Pay via Links (UPI Intents)
                    </span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h1 class="mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    Powering Seamless
                    <span class="hero-text-gradient">UPI Payments</span>
                    for Modern Businesses
                </h1>
                <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-md-8">
                        <p class="text-muted f-16 mb-0">
                            With love and trust of millions of merchants in India, power your UPI Provider with our QR
                            Generation Platform helps you accept instant payments with
                            ease, security,
                            and scalability — all with zero hassle.
                        </p>
                    </div>
                </div>
                <div class="my-4 my-sm-5 wow fadeInUp" data-wow-delay="0.4s">
                    <a href="<?php echo e(route('register')); ?>" class="btn btn-primary">Start 14-day Free Trial</a>
                </div>
                
            </div>
        </div>
    </div>
    <div class="technology-block scrollble-tech-block">
        <ul class="list-inline mb-0">
            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Paytm Business">
                <img src="https://play-lh.googleusercontent.com/IWU8HM1uQuW8wVrp6XpyOOJXvb_1tDPUDAOfkrl83RZPG9Ww3dCY9X1AV6T1atSvgXc"
                    alt="img" width="100" class="img-fluid rounded-circle p-md-3" />
            </li>
            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="HDFC Vyapar Hub">
                <img src="https://companieslogo.com/img/orig/HDB-bb6241fe.png?t=1720244492" alt="img"
                    class="img-fluid rounded-circle p-md-3" width="100" />
            </li>
            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="PhonePe Business">
                <img src="https://play-lh.googleusercontent.com/DIj92f1Tkfxm8rOTqPhlMtGsz8bboRju5v2V5ykxdGfpIAN4kTbNFfgBxpcFt5nY3KQ=w240-h480-rw"
                    alt="img" class="img-fluid rounded-circle p-md-3" width="100" />
            </li>
            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="BharatPe">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9VyYDlbpEDRsn56QvVuu9rQRbsHkiEfmxcA&s"
                    alt="img" class="img-fluid rounded-circle p-md-3" width="100" />
            </li>
        </ul>
    </div>
</header><?php /**PATH /Volumes/wd_work/github/ableprolaravel/resources/views/landing/layouts/home_header.blade.php ENDPATH**/ ?>