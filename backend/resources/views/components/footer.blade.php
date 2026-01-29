 <!-- Codebase Core JS -->
        <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/jquery.scrollLock.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/jquery.countTo.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/js.cookie.min.js') }}"></script>
        <script src="{{ asset('assets/js/codebase.js') }}"></script>

<!-- Page JS Plugins -->
        <script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Page JS Code -->
        <script src="{{ asset('assets/js/pages/be_tables_datatables.js') }}"></script>

<script src="{{ asset('assets/js/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/sweetalert2/es6-promise.auto.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/simplemde/js/simplemde.min.js')}}"></script>
<script>
            jQuery(function () {
                // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                Codebase.helpers(['select2','notify','simplemde']);

            });
        </script>

@if(isset($notify))
<script>
    jQuery(function () {

        let type = "{{ $notify['type'] }}";
        let message = "{{ $notify['message'] }}";

        // Map notify type → icon
        let icons = {
            success: 'fa fa-check-circle',
            error: 'fa fa-times-circle',
            danger: 'fa fa-times-circle',
            warning: 'fa fa-exclamation-triangle',
            info: 'fa fa-info-circle'
        };

        $.notify(
            {
                icon: icons[type] ?? 'fa fa-info-circle',
                message: message
            },
            {
                type: type === 'error' ? 'danger' : type,
                allow_dismiss: true,
                placement: {
                    from: "top",
                    align: "right"
                },
                delay: 6000,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                }
            }
        );

    });
</script>
@endif

@if(session('notify'))
<script>
    jQuery(function () {

        let notify = @json(session('notify'));

        let icons = {
            success: 'fa fa-check-circle',
            error: 'fa fa-times-circle',
            danger: 'fa fa-times-circle',
            warning: 'fa fa-exclamation-triangle',
            info: 'fa fa-info-circle'
        };

        $.notify(
            {
                icon: icons[notify.type] ?? icons.info,
                message: notify.message
            },
            {
                type: notify.type === 'error' ? 'danger' : notify.type,
                allow_dismiss: true,
                placement: { from: "top", align: "right" },
                delay: 6000,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                }
            }
        );

    });
</script>
@endif


@if($errors->any())
<script>
    jQuery(function () {
        $.notify(
            {
                icon: 'fa fa-times-circle',
                message: "{{ $errors->first() }}"
            },
            {
                type: 'danger',
                placement: { from: "top", align: "right" },
                delay: 5000
            }
        );
    });
</script>
@endif


