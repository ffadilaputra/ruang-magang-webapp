<html>
    <head>
        <title>App</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/css/demo.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/css/fonts.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/css/ready.min.css') ?>">
    </head>
    <body>
            @include('admin.header')
            @include('admin.sidebar')
            <div class="wrapper">
                @yield('content')
            </div>
        </div>

    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>assets/backend/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/core/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/core/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <!-- jQuery Scrollbar -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Moment JS -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/moment/moment.min.js"></script>
    <!-- Chart JS -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/chart.js/chart.min.js"></script>
    <!-- Chart Circle -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/chart-circle/circles.min.js"></script>
    <!-- Datatables -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/datatables/datatables.min.js"></script>
    <!-- Bootstrap Notify -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
    <!-- Bootstrap Toggle -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
    <!-- jQuery Vector Maps -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>
    <!-- Google Maps Plugin -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/gmaps/gmaps.js"></script>
    <!-- Dropzone -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/dropzone/dropzone.min.js"></script>
    <!-- Fullcalendar -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/fullcalendar/fullcalendar.min.js"></script>
    <!-- DateTimePicker -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>
    <!-- Bootstrap Tagsinput -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <!-- Bootstrap Wizard -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>
    <!-- jQuery Validation -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/jquery.validate/jquery.validate.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/summernote/summernote-bs4.min.js"></script>
    <!-- Select2 -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/select2/select2.full.min.js"></script>
    <!-- Sweet Alert -->
    <script src="<?= base_url() ?>assets/backend/js/plugin/sweetalert/sweetalert.min.js"></script>
    <!-- Ready Pro JS -->
    <script src="<?= base_url() ?>assets/backend/js/ready.min.js"></script>
    <!-- Ready Pro DEMO methods, don't include it in your project! -->
    <script src="<?= base_url() ?>assets/backend/js/setting-demo.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/demo.js"></script>
    <!-- Ion Icons -->
    <script src="https://unpkg.com/ionicons@4.3.0/dist/ionicons.js"></script>
    </body>
</html>
