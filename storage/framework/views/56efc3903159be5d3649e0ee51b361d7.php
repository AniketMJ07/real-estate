<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="<?php if(auth()->user()->system_role == 'user'): ?> <?php echo e(route('dashboard')); ?> <?php else: ?> <?php echo e(route('admin.dashboard')); ?> <?php endif; ?>"
                class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ -->
                <img src="<?php echo e(asset('assets/images/logo/' . config('setting.site_logo_light_mode'))); ?>"
                    class="img-fluid logo-lg" alt="logo" width="100" height="50" />
            </a>
        </div>
        <div class="navbar-content">
            <?php if(auth()->user()->system_role == 'user'): ?>
                <div class="card pc-user-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <?php
                                $allBusinesses = auth()->user()->businesses;
                                $business = $allBusinesses->where('id', session('selected_business_id'))->first();

                            ?>
                            <div class="flex-grow-1 ms-3 me-2">
                                <h6 class="mb-0"><?php echo e($business != null ? $business->name : 'NO BUSINESS CREATED'); ?>

                                </h6>
                                <small
                                    class="text-muted"><?php echo e($business != null ? strtoupper($business->pivot->role) : ''); ?></small>
                                <?php if($business): ?>
                                    <?php if($business->active_subscription != null): ?>
                                        <br><br>
                                        <?php if(Str::contains(strtolower($business->active_subscription->plan_name), 'trial')): ?>
                                            <small
                                                class="badge badge-lg text-bg-warning"><?php echo e($business->active_subscription->plan_name); ?></small>
                                        <?php else: ?>
                                            <small
                                                class="badge badge-lg text-bg-success"><?php echo e($business->active_subscription->plan_name); ?></small>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <br><br>
                                        <small class="badge badge-lg text-bg-danger"><?php echo e('No plan active'); ?></small>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse"
                                href="#pc_sidebar_userlink">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-sort-outline"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                            <div class="pt-3">
                                <?php $__currentLoopData = $allBusinesses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $business): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(route('business.change.scope', $business->id)); ?>"
                                        class="d-flex justify-content-between align-items-center <?php if(session('selected_business_id') == $business->id): ?> active <?php endif; ?>">
                                        <?php echo e($business->name); ?>

                                        <?php if($business->id == session('selected_business_id')): ?>
                                            <i class="ti ti-check text-success"></i>
                                        <?php endif; ?>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('business.create')); ?>"
                                    class="d-flex justify-content-between align-items-center">
                                    <span class="text-primary">Create New Business</span>
                                    <i class="ti ti-plus text-primary"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="pc-navbar">
                    <li class="pc-item pc-caption">
                        <label data-i18n="Navigation">Navigation</label>
                    </li>
                    <li class="pc-item">
                        <a href="<?php echo e(route('dashboard')); ?>" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-status-up"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Dashboard">Dashboard</span>
                        </a>
                    </li>
                    <?php if(auth()->user() && auth()->user()->business() && in_array(auth()->user()->business()->pivot->role, ['owner', 'manager', 'finance'])): ?>
                        <?php if(auth()->user()->business()->linked_merchant && auth()->user()->business()->linked_merchant->connected == true): ?>
                            <li class="pc-item">
                                <a href="<?php echo e(route('merchant.setup_upi')); ?>" class="pc-link">
                                    <span class="pc-micon">
                                        <svg class="pc-icon text-success">
                                            <use xlink:href="#custom-mouse-circle"></use>
                                        </svg>
                                    </span>
                                    <span class="pc-mtext" data-i18n="Merchant Connected">Merchant Connected</span>
                                </a>
                            </li>
                        <?php else: ?>
                            <li class="pc-item">
                                <a href="<?php echo e(route('merchant.setup_upi')); ?>" class="pc-link">
                                    <span class="pc-micon">
                                        <svg class="pc-icon">
                                            <use xlink:href="#custom-link"></use>
                                        </svg>
                                    </span>
                                    <span class="pc-mtext" data-i18n="Connect Merchant">Connect Merchant</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <li class="pc-item">
                            <a href="<?php echo e(route('live-transactions')); ?>" class="pc-link">
                                <span class="pc-micon">
                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-story"></use>
                                    </svg>
                                </span>
                                <span class="pc-mtext" data-i18n="Live Transactions">Live Transactions</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="<?php echo e(route('qrcodetransaction.index')); ?>" class="pc-link">
                                <span class="pc-micon">

                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-presentation-chart"></use>
                                    </svg>
                                </span>
                                <span class="pc-mtext" data-i18n="Transactions">Transactions</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(auth()->user() && auth()->user()->business() && in_array(auth()->user()->business()->pivot->role, ['owner', 'manager'])): ?>
                        <li class="pc-item">
                            <a href="<?php echo e(route('plans.index')); ?>" class="pc-link">
                                <span class="pc-micon">
                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-dollar-square"></use>
                                    </svg>
                                </span>
                                <span class="pc-mtext" data-i18n="Plans">Plans</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(auth()->user() && auth()->user()->business() && in_array(auth()->user()->business()->pivot->role, ['owner', 'manager', 'finance'])): ?>
                        <li class="pc-item">
                            <a href="<?php echo e(route('subscriptions.index')); ?>" class="pc-link">
                                <span class="pc-micon">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-list">
                                        <line x1="8" y1="6" x2="21" y2="6"></line>
                                        <line x1="8" y1="12" x2="21" y2="12"></line>
                                        <line x1="8" y1="18" x2="21" y2="18"></line>
                                        <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                        <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                        <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                    </svg>
                                </span>
                                <span class="pc-mtext" data-i18n="Subscriptions">Subscriptions</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(auth()->user() && auth()->user()->business() && in_array(auth()->user()->business()->pivot->role, ['owner', 'manager', 'developer'])): ?>
                        <li class="pc-item">
                            <a href="<?php echo e(route('webhooks.index')); ?>" class="pc-link">
                                <span class="pc-micon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-external-link">
                                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                        <polyline points="15 3 21 3 21 9"></polyline>
                                        <line x1="10" y1="14" x2="21" y2="3"></line>
                                    </svg>

                                </span>
                                <span class="pc-mtext" data-i18n="Webhooks">Webhooks</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="<?php echo e(route('api_keys.index')); ?>" class="pc-link">
                                <span class="pc-micon">
                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-lock-outline"></use>
                                    </svg>
                                </span>
                                <span class="pc-mtext" data-i18n="API Tokens">API Tokens</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="<?php echo e(route('api.docs')); ?>" class="pc-link">
                                <span class="pc-micon">
                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-shield"></use>
                                    </svg>
                                </span>
                                <span class="pc-mtext" data-i18n="API Documentation">API Documentation</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <li class="pc-item">
                        <a href="<?php echo e(route('businesses')); ?>" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-layer"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Businesses">Businesses</span>
                        </a>
                    </li>
                    <?php if(auth()->user() && auth()->user()->business() && in_array(auth()->user()->business()->pivot->role, ['owner'])): ?>
                        <li class="pc-item">
                            <a href="<?php echo e(route('business.users')); ?>" class="pc-link">
                                <span class="pc-micon">
                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-user"></use>
                                    </svg>

                                </span>
                                <span class="pc-mtext" data-i18n="Users">Users</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <li class="pc-item">
                        <a href="<?php echo e(route('plugins')); ?>" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-element-plus"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Plugins">Plugins</span>
                            <span class="badge badge-lg text-bg-primary ms-3">New</span>
                        </a>
                    </li>
                </ul>
            <?php endif; ?>
            <?php if(auth()->user()->system_role == 'admin'): ?>
                <ul class="pc-navbar">
                    <li class="pc-item pc-caption">
                        <label data-i18n="Admin Area">Admin Area</label>
                    </li>
                    <li class="pc-item">
                        <a href="<?php echo e(route('admin.dashboard')); ?>" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-story"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Overview">Overview</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="<?php echo e(route('admin.transactions.live')); ?>" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-story"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Live Transactions">Live Transactions</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="<?php echo e(route('admin.businesses')); ?>" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-layer"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Businesses">Businesses</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="<?php echo e(route('admin.users')); ?>" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-user"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Users">Users</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="<?php echo e(route('admin.plans')); ?>" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-dollar-square"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Plans">Plans</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="<?php echo e(route('admin.pages')); ?>" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-notification-status"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Pages">Pages</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="<?php echo e(route('admin.subscriptions')); ?>" class="pc-link">
                            <span class="pc-micon">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-list">
                                    <line x1="8" y1="6" x2="21" y2="6"></line>
                                    <line x1="8" y1="12" x2="21" y2="12"></line>
                                    <line x1="8" y1="18" x2="21" y2="18"></line>
                                    <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                    <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                    <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Subscriptions">Subscriptions</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="<?php echo e(route('admin.contact-form.submissions')); ?>" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-call-calling"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Contact Form">Contact Form</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="<?php echo e(route('admin.settings')); ?>" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-level"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Settings">Settings</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="<?php echo e(url('maintenance/horizon')); ?>" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-level"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Horizon">Horizon</span>
                        </a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>
<!-- [ Sidebar Menu ] end --><?php /**PATH /Volumes/wd_work/github/ableprolaravel/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>