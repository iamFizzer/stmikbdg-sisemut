@extends('dashboard')

@section('content')
<div class="container">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-md-9 stretch-card d-flex justify-content-center">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Data Dosen</h4>
                  <p class="card-description">
                    Form Tambah Data Dosen 
                  </p>
                  <form class="forms-sample" action="{{route('pengguna.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="nama_dosen">Nama Dosen</label>
                      <input type="text" class="form-control" id="nama_dosen" name="nama_dosen">
                    </div>
                    <div class="form-group">
                      <label for="kode_dosen">Kode Dosen</label>
                      <input type="text" class="form-control" id="kode_dosen" name="kode_dosen" required>
                    </div>
                    <div class="form-group">
                      <label for="no_card">Nomor Kartu</label>
                      <input type="password" class="form-control" id="no_card" name="no_card" required>
                      <span style="color: red">* Tap Kartu Dosen</span>
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
</div>
    
@endsection