<!-- [ Header Topbar ] start -->
<header class="pc-header">
    <div class="header-wrapper">
        <!-- [Mobile Media Block] start -->
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <!-- ======= Menu collapse Icon ===== -->
                <li class="pc-h-item pc-sidebar-collapse">
                    <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="pc-h-item pc-sidebar-popup">
                    <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- [Mobile Media Block end] -->
        <div class="ms-auto">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <svg class="pc-icon">
                            <use xlink:href="#custom-sun-1"></use>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                        <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-moon"></use>
                            </svg>
                            <span>Dark</span>
                        </a>
                        <a href="#!" class="dropdown-item" onclick="layout_change('light')">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-sun-1"></use>
                            </svg>
                            <span>Light</span>
                        </a>
                    </div>
                </li>
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <svg class="pc-icon">
                            <use xlink:href="#custom-language"></use>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown lng-dropdown">
                        <a href="#!" class="dropdown-item" data-lng="en">
                            <span>
                                English
                            </span>
                        </a>
                        <a href="#!" class="dropdown-item" data-lng="hi">
                            <span>
                                हिंदी
                            </span>
                        </a>
                    </div>
                </li>
                <li class="dropdown pc-h-item header-user-profile">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
                        <?php if(auth()->user()->avatar == null): ?>
                            <img data-src="<?php echo e(asset('assets/images/user/avatar-2.jpg')); ?>" alt="user-image"
                                class="user-avtar lazy-items-image" src="/assets/images/loader.gif">
                        <?php else: ?>
                            <img src="/assets/images/loader.gif" data-src="<?php echo e(auth()->user()->avatar); ?>"
                                alt="user-image" class="user-avtar lazy-items-image"
                                style="border-radius: 8px !important" />
                        <?php endif; ?>
                    </a>
                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Profile</h5>
                        </div>
                        <div class="dropdown-body">
                            <div class="profile-notification-scroll position-relative"
                                style="max-height: calc(100vh - 225px)">
                                <div class="d-flex mb-1">
                                    <div class="flex-shrink-0">
                                        <?php if(auth()->user()->avatar == null): ?>
                                            <img data-src="<?php echo e(asset('assets/images/user/avatar-2.jpg')); ?>"
                                                alt="user-image" class="user-avtar lazy-items-image wid-35"
                                                src="/assets/images/loader.gif">
                                        <?php else: ?>
                                            <img data-src="<?php echo e(auth()->user()->avatar); ?>" alt="user-image"
                                                class="user-avtar lazy-items-image wid-35 rounded"
                                                src="/assets/images/loader.gif">
                                        <?php endif; ?>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">
                                            <?php echo e(auth()->user()->first_name . ' ' . auth()->user()->last_name); ?>

                                        </h6>
                                        <span><?php echo e(auth()->user()->email); ?></span><br>
                                        <span><?php echo e(auth()->user()->phone); ?></span>
                                    </div>
                                </div>
                                <hr class="border-secondary border-opacity-50" />
                                <p class="text-span f-w-600">Manage</p>
                                <a href="" class="dropdown-item">
                                    <span>
                                        <svg class="pc-icon text-muted me-2">
                                            <use xlink:href="#custom-setting-outline"></use>
                                        </svg>
                                        <span>Profile</span>
                                    </span>
                                </a>
                                <?php if(auth()->user()->system_role != 'admin'): ?>
                                    <hr class="border-secondary border-opacity-50" />
                                    <p class="text-span f-w-600">Businesses</p>
                                   
                                    <div class="my-2 text-center">
                                        <a href=""
                                            class="btn btn-sm btn-outline-secondary w-100">
                                            <i class="ti ti-plus me-2"></i> New Business
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <hr class="border-secondary border-opacity-50" />
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger me-2">
                                            <svg class="pc-icon me-2">
                                                <use xlink:href="#custom-logout-1-outline"></use>
                                            </svg>Logout
                                        </button>
                                    </form>
                                    <?php if (is_impersonating()) : ?>
                                        <div class="d-block d-sm-none">
                                            <a href="<?php echo e(route('impersonate.leave')); ?>" class="btn btn-dark">
                                                <svg class="pc-icon">
                                                    <use xlink:href="#custom-logout-1-outline"></use>
                                                </svg>
                                                Admin
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php if (is_impersonating()) : ?>
                    <li class="dropdown pc-h-item">
                        <div class="d-none d-sm-block">
                            <a href="<?php echo e(route('impersonate.leave')); ?>" class="btn btn-dark">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-logout-1-outline"></use>
                                </svg>
                                Admin
                            </a>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function lazyLoadImages(container = document) {
                const lazyImages = container.querySelectorAll('.lazy-items-image');
                lazyImages.forEach(img => {
                    const dataSrc = img.getAttribute('data-src');
                    if (dataSrc) {
                        // Only load if not already loading/replaced
                        if (!img.dataset.loading) {
                            img.dataset.loading = true;

                            // Preload image in background
                            const preload = new Image();
                            preload.src = dataSrc;
                            preload.onload = function() {
                                img.src = dataSrc; // replace loader GIF with actual image
                                img.removeAttribute('data-src');
                                delete img.dataset.loading;
                            };
                        }
                    }
                });
            }

            // Initial lazy load for visible images
            setTimeout(() => {
                lazyLoadImages();
            }, 0.5 * 1000);


            // Lazy load on scroll and resize
            window.addEventListener('scroll', () => lazyLoadImages());
            window.addEventListener('resize', () => lazyLoadImages());

            // Lazy load images inside dropdown when opened
            const dropdowns = document.querySelectorAll('.dropdown');
            dropdowns.forEach(dropdown => {
                dropdown.addEventListener('shown.bs.dropdown', function() {
                    lazyLoadImages(this); // only check images inside this dropdown
                });
            });
        });
    </script>

</header>

<!-- [ Header ] end -->
<?php /**PATH /Volumes/wd_work/github/ableprolaravel/resources/views/layouts/header.blade.php ENDPATH**/ ?>