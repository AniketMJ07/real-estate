<?php $__currentLoopData = glob(public_path('assets/css/plugins/*.css')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cssFile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/' . basename($cssFile))); ?>">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>" id="main-style-link" />
<link rel="stylesheet" href="<?php echo e(asset('assets/css/style-preset.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('assets/css/uikit.css')); ?>" />

<link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>" />

<link rel="stylesheet" href="<?php echo e(asset('assets/fonts/inter/inter.css')); ?>" id="main-font-link" />
<link rel="stylesheet" href="<?php echo e(asset('assets/fonts/phosphor/duotone/style.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('assets/fonts/tabler-icons.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('assets/fonts/feather.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('assets/fonts/fontawesome.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('assets/fonts/material.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('assets/css/toastr.css')); ?>" />
<link rel="stylesheet" href="https://unpkg.com/intro.js/introjs.css" />
<?php echo $__env->yieldContent('css'); ?><?php /**PATH /Volumes/wd_work/github/ableprolaravel/resources/views/layouts/css.blade.php ENDPATH**/ ?>