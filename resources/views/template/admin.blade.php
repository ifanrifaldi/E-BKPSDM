<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BKPSDM</title>

    <link rel="shortcut icon" href="{{ url('public/admin') }}/bkpsdm.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        @include('layout.header')
        @include('layout.sidebar')

        <div class="content-wrapper" style="background-image:url('{{ url('public/admin/bg2.jpg') }}'); background-size: cover; background-position: center;">
            <div class="dark-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(90, 88, 88, 0.106);"></div>

            <div class="content-header">
                <div class="container-fluid">
                    <!-- @include('template.utils.notif') -->
                </div>
            </div>

            <section class="content">
                @yield('content')   
            </section>

        </div>

        @include('layout.footer')


        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if(session('success'))
            Swal.fire("Success!", "{{ session('success') }}", "success");
            @elseif(session('warning'))
            Swal.fire("Success!", "{{ session('warning') }}", "warning");
            @elseif(session('danger'))
            Swal.fire("Success!", "{{ session('danger') }}", "error");
            @endif
        });
    </script>

    <script src="{{ url('public/admin') }}/plugins/jquery/jquery.min.js"></script>

    <script src="{{ url('public/admin') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/chart.js/Chart.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/sparklines/sparkline.js"></script>
    <script src="{{ url('public/admin') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="{{ url('public/admin') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/moment/moment.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ url('public/admin') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="{{ url('public/admin') }}/dist/js/adminlte.js"></script>
    <script src="{{ url('public/admin') }}/dist/js/pages/dashboard.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/summernote/summernote-bs4.min.js"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    <script>
        $(function() {
            $('.summernote').summernote({
                height: 300
            })
        })
    </script>

    <script>
        $(document).ready(function() {
            $('.product-image-thumb').on('click', function() {
                var $image_element = $(this).find('img')
                $('.product-image').prop('src', $image_element.attr('src'))
                $('.product-image-thumb.active').removeClass('active')
                $(this).addClass('active')
            })
        })
    </script>
</body>

</html>