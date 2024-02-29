@extends('dashboard')

@section('content')
<div class="container">
    <h2>Data User</h2>
    <div class="d-flex flex-row-reverse">
        <a href="{{route('user.create')}}" class="btn btn-success"><i class="mdi mdi-account-multiple-plus">Tambah Data</i></a>
    </div><br>

    @if (session('Pesan'))
    <div class="alert alert-success" role="alert">
        {{ session('Pesan') }}
    </div>
    @endif
    <table class="table table-bordered table-resposive">
        <thead>
            <tr>
                <td>NO</td>
                <td>Nama</td>
                <td>Email</td>
                <td>Role</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($user as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->role}}</td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection