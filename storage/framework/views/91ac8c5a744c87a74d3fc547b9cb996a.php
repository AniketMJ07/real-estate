<?php $__env->startSection('title'); ?>
    Login
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main_content'); ?>
    <?php echo $__env->make('widgets.loader', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class="auth-main">
        <div class="auth-wrapper v2">
            <div class="auth-sidecontent">
                <img src="/assets/images/authentication/img-auth-sideimg.jpg" alt="images" class="img-fluid img-auth-side" />
            </div>
            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-header text-center">
                        <img src="<?php echo e(asset('assets/images/logo') . '/' . config('setting.site_logo_light_mode')); ?>"
                            alt="logo" class="logo-dark-mode" width="200" />
                    </div>
                    <div class="card-body">
                        <?php echo $__env->make('widgets.form-inline-alerts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php if(config('setting.enable_google_login') == 'true'): ?>
                            <div class="text-center">
                                <div class="d-grid my-3">
                                    <a href="<?php echo e(route('login.social.redirect', 'google')); ?>""
                                        class=" btn mt-2 btn-light-primary
                                        bg-light text-muted">
                                        <img src="/assets/images/authentication/google.svg" alt="img" /> <span> Sign In
                                            with
                                            Google</span>
                                    </a>
                                </div>
                            </div>
                            <div class="saprator my-3">
                                <span>OR</span>
                            </div>
                        <?php endif; ?>
                        <h4 class="text-center f-w-500 mb-3">Login with your email</h4>
                        <form action="<?php echo e(route('login.store')); ?>" method="POST" id="loginForm">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Email Address"
                                    name="email" value="<?php echo e(old('email')); ?>" required />
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="floatingInput1" placeholder="Password"
                                    name="password" minlength="8" required />
                            </div>

                            <div class="d-flex mt-1 justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input input-primary" type="checkbox" id="rememberTokenCheck"
                                        name="remember_token" />

                                    <label class="form-check-label text-muted" for="rememberTokenCheck">Remember me <i
                                            class="far fa-question-circle fa-fw f-14" data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            data-bs-title="You will be logged in for a longer period of time"></i></label>

                                </div>
                                <h6 class="text-secondary f-w-400 mb-0">
                                    <a href="<?php echo e(route('forgot-password')); ?>"> Forgot Password? </a>
                                </h6>
                            </div>
                            <div class="my-5">
                                <?php echo NoCaptcha::display(['data-callback' => 'recaptchaCallback']); ?>

                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary" id="submitBtn"
                                    <?php if(config('setting.enable_google_recaptcha') == 'true'): ?> disabled <?php endif; ?>>Login</button>
                            </div>
                        </form>
                        <div class="d-flex justify-content-between align-items-end mt-4">
                            <h6 class="f-w-500 mb-0">Don't have an Account?</h6>
                            <a href="<?php echo e(route('register')); ?>" class="link-primary">Create Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Volumes/wd_work/github/ableprolaravel/resources/views/auth/login.blade.php ENDPATH**/ ?>