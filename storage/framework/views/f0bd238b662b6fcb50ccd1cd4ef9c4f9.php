<script>
    toastr.options = {
        "closeButton": false,
        "progressBar": false,
        "timeOut": "5000",
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "tapToDismiss": true,
        "newestOnTop": true,
        "escapeHtml": true,
        "iconClasses": {
            "error": "toast-error",
            "info": "toast-info",
            "success": "toast-success",
            "warning": "toast-warning"
        },
        "borderRadius": "10px",
    };
</script>
<script>
    <?php if(session('success')): ?>
        toastr.success("<?php echo e(session('success')); ?>");
    <?php endif; ?>

    <?php if(session('error')): ?>
        toastr.error("<?php echo e(session('error')); ?>");
    <?php endif; ?>

    <?php if(session('warning')): ?>
        toastr.warning("<?php echo e(session('warning')); ?>");
    <?php endif; ?>

    <?php if(session('info')): ?>
        toastr.info("<?php echo e(session('info')); ?>");
    <?php endif; ?>
</script><?php /**PATH /Volumes/wd_work/github/ableprolaravel/resources/views/widgets/toast.blade.php ENDPATH**/ ?>