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
    @if(session('success'))
        toastr.success("{{ session('success') }}");
    @endif

    @if(session('error'))
        toastr.error("{{ session('error') }}");
    @endif

    @if(session('warning'))
        toastr.warning("{{ session('warning') }}");
    @endif

    @if(session('info'))
        toastr.info("{{ session('info') }}");
    @endif
</script>