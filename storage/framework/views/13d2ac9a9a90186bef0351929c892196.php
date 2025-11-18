<footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
        <div class="row">
            <div class="col my-1">
                <p class="m-0">© <?php echo e(config('setting.site_name')); ?></p>
            </div>
            <div class="col-auto my-1">
                <ul class="list-inline footer-link mb-0">
                    <?php if(auth()->user()): ?>
                        <?php if(auth()->user()->system_role == "user"): ?>
                            <li class="list-inline-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
                        <?php else: ?>
                            <li class="list-inline-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                        <?php endif; ?>
                    <?php else: ?>
                        <li class="list-inline-item"><a href="<?php echo e(route('welcome')); ?>">Home</a></li>

                    <?php endif; ?>
                    <li class="list-inline-item"><a href="<?php echo e(route('contact')); ?>" target="_blank">Support</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><?php /**PATH /Volumes/wd_work/github/ableprolaravel/resources/views/layouts/footer.blade.php ENDPATH**/ ?>