<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('layouts.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('layouts.css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('layouts.js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo NoCaptcha::renderJs(); ?>

</head>

<body>
    <?php echo $__env->yieldContent('main_content'); ?>
    <?php echo $__env->make('widgets.toast', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <script>
        $(document).ready(function () {
            window.recaptchaCallback = function () {
                document.getElementById('submitBtn').disabled = false;
            };
        });
    </script>
    <?php echo $__env->yieldPushContent('modals'); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH /Volumes/wd_work/github/ableprolaravel/resources/views/auth/layouts/master.blade.php ENDPATH**/ ?>