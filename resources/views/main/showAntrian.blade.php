<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="refresh" content="30">
  <title>SI SEMUT </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('src')}}/assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{asset('src')}}/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{asset('src')}}/assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{asset('src')}}/assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="{{asset('src')}}/assets/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{asset('src')}}/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('src')}}/assets/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="{{asset('src')}}/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('src')}}/assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('src')}}/assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start"> 
            <div>
                <a class="navbar-brand brand-logo" href="/">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJI5jc_a0qQLImJXlrDQ1B5A5J1lRzehBCbqSwpt364g&s" alt="logo" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="/">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJI5jc_a0qQLImJXlrDQ1B5A5J1lRzehBCbqSwpt364g&s" alt="logo" />
                </a>
            </div>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

        <nav class="sidebar sidebar-offcanvas" id="sidebar">

        </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 stretch-card">
                    <div class="card">
                        <div class="card-header">
                            <Span>MINA ISMU RAHAYU,M.T</Span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4"><h5>Antrian Sekarang</h5><h3>{{$todayMN[0]->nim}} || {{$todayMN[0]->nama_mhs}}</h3></div>
                                <div class="col-md-4"><h5>Persiapan</h5><h3>{{$todayMN[1]->nim}} || {{$todayMN[1]->nama_mhs}}</h3></div>
                                <div class="col-md-4"><h5>Total Antian</h5><h3>{{$jumlahMN}}</h3></div>
                            </div>
                            
                            
                        </div>
                    </div>
                    </div>
                <div class="col-md-6 stretch-card">
                    <div class="card">
                        <div class="card-header">
                            <Span>Dayanni Vera Versanika,M.Kom</Span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4"><h5>Antrian Sekarang</h5><h3>{{$todayMN[0]->nim}} || {{$todayMN[0]->nama_mhs}}</h3></div>
                                <div class="col-md-4"><h5>Persiapan</h5><h3>{{$todayMN[1]->nim}} || {{$todayMN[1]->nama_mhs}}</h3></div>
                                <div class="col-md-4"><h5>Total Antian</h5><h3>{{$jumlahMN}}</h3></div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
        </div>
        </div>
    
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                 <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2024. Dev STMIK BANDUNG.</span>
            </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <script>
    window.setTimeout( function() {
  window.location.reload();
}, 10000);
  </script>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('src')}}/assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="{{asset('src')}}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('src')}}/assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="{{asset('src')}}/assets/vendors/select2/select2.min.js"></script>
  <script src="{{asset('src')}}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('src')}}/assets/js/off-canvas.js"></script>
  <script src="{{asset('src')}}/assets/js/hoverable-collapse.js"></script>
  <script src="{{asset('src')}}/assets/js/template.js"></script>
  <script src="{{asset('src')}}/assets/js/settings.js"></script>
  <script src="{{asset('src')}}/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('src')}}/assets/js/file-upload.js"></script>
  <script src="{{asset('src')}}/assets/js/typeahead.js"></script>
  <script src="{{asset('src')}}/assets/js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>