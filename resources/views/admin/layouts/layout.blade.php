<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('/')}}/admin_assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{url('/')}}/admin_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('/')}}/admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{url('/')}}/admin_assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/')}}/admin_assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('/')}}/admin_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('/')}}/admin_assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url('/')}}/admin_assets/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" type="text/css" href="{{ url('/') }}/admin_assets/toastr.css">




</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->

  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{url('/')}}/admin_assets/icon.jpg" alt="Cent Bank LTD" height="60" width="60">
  </div>

  @include('admin.layouts.header')
    @include('admin.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
    @include('admin.layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

</script>
<!-- jQuery -->
<script src="{{url('/')}}/admin_assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('/')}}/admin_assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{url('/')}}/admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{url('/')}}/admin_assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{url('/')}}/admin_assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{url('/')}}/admin_assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{url('/')}}/admin_assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('/')}}/admin_assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{url('/')}}/admin_assets/plugins/moment/moment.min.js"></script>
<script src="{{url('/')}}/admin_assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('/')}}/admin_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{url('/')}}/admin_assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{url('/')}}/admin_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<link rel="stylesheet" href="{{url('/')}}/admin_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{url('/')}}/admin_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{url('/')}}/admin_assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- AdminLTE App -->
<script src="{{url('/')}}/admin_assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{url('/')}}/admin_assets/dist/js/demo.js"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('/')}}/admin_assets/dist/js/pages/dashboard.js"></script>
<script type="text/javascript" src="{{ url('/') }}/admin_assets/toastr.min.js"></script>

<script>
    @if (Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
    @endif

    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>

<!-- DataTables  & Plugins -->
<script src="{{url('/')}}/admin_assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('/')}}/admin_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('/')}}/admin_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('/')}}/admin_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{url('/')}}/admin_assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{url('/')}}/admin_assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{url('/')}}/admin_assets/plugins/jszip/jszip.min.js"></script>
<script src="{{url('/')}}/admin_assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{url('/')}}/admin_assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{url('/')}}/admin_assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{url('/')}}/admin_assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{url('/')}}/admin_assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  /** add active class and stay opened when selected */
  var url = window.location;

// for sidebar menu entirely but not cover treeview
$('ul.nav-sidebar a').filter(function() {
   return this.href == url;
}).addClass('active');

// for treeview
$('ul.nav-treeview a').filter(function() {
   return this.href == url;
}).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');


 </script>
 <script>
   $(function () {
   $("#example1").DataTable({
     "responsive": true, "lengthChange": false, "autoWidth": false,
     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
   }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   $('#example2').DataTable({
     "paging": true,
     "lengthChange": false,
     "searching": false,
     "ordering": true,
     "info": true,
     "autoWidth": false,
     "responsive": true,
   });
 });
 </script>
 <script>
   $(function () {
     $(document).on('click', '[data-toggle="lightbox"]', function(event) {
       event.preventDefault();
       $(this).ekkoLightbox({
         alwaysShowClose: true
       });
     });

     $('.filter-container').filterizr({gutterPixels: 3});
     $('.btn[data-filter]').on('click', function() {
       $('.btn[data-filter]').removeClass('active');
       $(this).addClass('active');
     });
   })
 </script>

</body>
</html>
