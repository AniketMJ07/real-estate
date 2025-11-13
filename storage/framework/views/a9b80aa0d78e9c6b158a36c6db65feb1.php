<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
<?php if(session('error')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>
<?php if(session('warning')): ?>
    <div class="alert alert-warning">
        <?php echo e(session('warning')); ?>

    </div>
<?php endif; ?>
<?php if(session('info')): ?>
    <div class="alert alert-info">
        <?php echo e(session('info')); ?>

    </div>
<?php endif; ?>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php if(session('status')): ?>
    <div class="alert alert-info">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>
<?php if(session('message')): ?>
    <div class="alert alert-primary">
        <?php echo e(session('message')); ?>

    </div>
<?php endif; ?>
<?php if(session('alert')): ?>
    <div class="alert alert-secondary">
        <?php echo e(session('alert')); ?>

    </div>
<?php endif; ?>
<?php if(session('notice')): ?>
    <div class="alert alert-light">
        <?php echo e(session('notice')); ?>

    </div>
<?php endif; ?><?php /**PATH /Volumes/wd_work/github/ableprolaravel/resources/views/widgets/form-inline-alerts.blade.php ENDPATH**/ ?>