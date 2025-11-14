<?php $__env->startPush('head_css'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main_content'); ?>
<div>
   landing details here
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/plugins/wow.min.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="<?php echo e(asset('assets/js/plugins/Jarallax.js')); ?>"></script>

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
                    url: "<?php echo e(route('landing.stats.count')); ?>",
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
                    url: "<?php echo e(route('landing.stats.count')); ?>",
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
<?php $__env->stopPush(); ?>
<?php echo $__env->make('landing.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Volumes/wd_work/github/ableprolaravel/resources/views/landing/index.blade.php ENDPATH**/ ?>