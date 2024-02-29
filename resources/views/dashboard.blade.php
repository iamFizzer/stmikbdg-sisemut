<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SI SEMUT || DASHBOARD </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('src')}}/assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{asset('src')}}/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{asset('src')}}/assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{asset('src')}}/assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="{{asset('src')}}/assets/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{asset('src')}}/assets/vendors/css/vendor.bundle.base.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('src')}}/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" type="text/css" href="{{asset('src')}}/assets/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('src')}}/assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('src')}}/assets/images/favicon.png" />
</head>

<body class="with-welcome-text">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
   @include('layouts.headers')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      @include('layouts.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('layouts.footers')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
 
  <script src="{{asset('src')}}/assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="{{asset('src')}}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('src')}}/assets/vendors/chart.js/Chart.min.js"></script>
  <script src="{{asset('src')}}/assets/vendors/progressbar.js/progressbar.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('src')}}/assets/js/off-canvas.js"></script>
  <script src="{{asset('src')}}/assets/js/hoverable-collapse.js"></script>
  <script src="{{asset('src')}}/assets/js/template.js"></script>
  <script src="{{asset('src')}}/assets/js/settings.js"></script>
  <script src="{{asset('src')}}/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('src')}}/assets/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="{{asset('src')}}/assets/js/dashboard.js"></script>
  <script src="{{asset('src')}}/assets/js/proBanner.js"></script>
  <!-- <script src="{{asset('src')}}/../../assets/js/Chart.roundedBarCharts.js"></script> -->
  <!-- End custom js for this page-->
  @stack('add-script');
</body>

</html>