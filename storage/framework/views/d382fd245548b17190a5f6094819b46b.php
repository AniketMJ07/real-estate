<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="<?php echo e(config('setting.site_description')); ?>">
<meta name="keywords" content="<?php echo e(config('setting.site_keywords')); ?>">
<meta name="author" content="ableprolaravel">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<link rel="icon" href="<?php echo e(asset('assets/images/logo/' . config('setting.site_favicon'))); ?>">
<link rel="shortcut icon" href="<?php echo e(asset('assets/images/logo/' . config('setting.site_favicon'))); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="https://<?php echo e(env('APP_URL')); ?>">
<meta property="og:title" content="<?php echo e(config('setting.site_name')); ?>">
<meta property="og:description" content="<?php echo e(config('setting.site_description')); ?>">
<meta property="og:image" content="<?php echo e(asset('assets/images/meta/meta_image.png')); ?>">
<meta property="og:image:width" content="1920">
<meta property="og:image:height" content="1080">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="https://<?php echo e(env('APP_URL')); ?>">
<meta name="twitter:title" content="<?php echo e(config('setting.site_name')); ?>">
<meta name="twitter:description" content="<?php echo e(config('setting.site_description')); ?>">
<meta name="twitter:image" content="<?php echo e(asset('assets/images/meta/meta_image.png')); ?>">
<title>
    <?php if(View::hasSection('title')): ?>
        <?php echo $__env->yieldContent('title'); ?> | <?php echo e(config('setting.site_name')); ?>

    <?php else: ?>
        <?php echo e(config('setting.site_name')); ?>

    <?php endif; ?>
</title>

<!-- Google font-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&amp;display=swap"
    rel="stylesheet">
<?php if(!auth()->user() || auth()->user()->system_role == 'user'): ?>
    <?php echo $__env->make('widgets.g_analytics', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<?php if(config('setting.tawk_to_status') == 'true' && config('setting.tawk_to_prop_id') != '' && !Str::contains(request()->path(), ['admin', 'gateway'])): ?>
    <?php echo $__env->make('widgets.tawk_to', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?><?php /**PATH /Volumes/wd_work/github/ableprolaravel/resources/views/layouts/head.blade.php ENDPATH**/ ?>