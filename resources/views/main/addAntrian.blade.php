<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tambah Antrian </title>
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
            <div class="col-md-9 stretch-card d-flex justify-content-center">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Data</h4>
                  <p class="card-description">
                    Form Tambah Data
                  </p>
                  <form class="forms-sample" action="/addAntrian" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="dosen">Nama Dosen</label>
                      <input type="text" class="form-control" id="dosen" name="dosen" value="{{$getDosen->nama_dosen}}" readonly>
                      <input type="hidden" name="kd_dosen" value="{{$getDosen->kode_dosen}}">
                      <input type="hidden" name="id_dosen" value="{{$getDosen->id}}">
                    </div>
                    <div class="form-group">
                      <label for="nim">Nim</label>
                      <input type="text" class="form-control" id="nim" name="nim" required>
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
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