@extends('dashboard')

@section('content')
<div class="container">
    <h2>Data Bimbingan {{\Carbon\Carbon::today()->format('d/M/Y')}}</h2>
    @if (session('Pesan'))
    <div class="alert alert-success" role="alert">
        {{ session('Pesan') }}
    </div>
    @endif
    <table class="table table-bordered table-resposive">
        <thead>
            <tr>
                <td>NO</td>
                <td>Nim</td>
                <td>Nama Mahasiswa</td>
                <td>Tanggal Bimbingan</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($antrian as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->nim}}</td>
                    <td>{{$item->nama_mhs}}</td>
                    <td>{{\Carbon\Carbon::parse($item->tanggalBimbingan)->format('d/m/Y')}}</td>
                    <td>
                        <a href="/admin/selesai/antrian/{{$item->id}}" class="btn btn-success">Selesai</a>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection