@extends('dashboard')

@section('content')
<div class="container">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-md-9 stretch-card d-flex justify-content-center">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Data User</h4>
                  <p class="card-description">
                    Form Tambah Data User 
                  </p>
                  <form class="forms-sample" action="{{route('user.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="name">Nama</label>
                     <select name="nama" id="nama" class="form-control select2">
                      @foreach ($dosen as $item)
                      <option value="{{$item->nama_dosen}}">{{$item->nama_dosen}}</option>
                      @endforeach
                     </select>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                      <label for="password">Passord</label>
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                      <label for="role">Role</label>
                     <select name="role" id="role" class="form-control select2">
                       <option value="Dosen">Dosen</option>
                       <option value="Operator">Operator</option>
                       <option value="Admin">Admin</option>
                    </select>
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
@push('add-script')
    <script>
      $(document).ready(function() {
    $('.select2').select2();
});
    </script>
@endpush