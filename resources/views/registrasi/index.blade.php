@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{$judul}}</h1>
    @if(session('pesan'))
    <div class="alert alert-success">{{session('pesan')}}</div>
    @endif
    
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Asal Sekolah</th>
                <th>Jurusan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($isi as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->mahasiswa->nama}}</td>
                <td>{{$item->mahasiswa->asal_sekolah}}</td>
                <td>{{$item->jurusan->nama}}</td>
                <td>{{$item->status}}</td>
                <td>
                    <a href="{{url('admin/registrasi/syarat',$item->id)}}" class="btn btn-primary">Lihat Syarat</a>
                    <a href="{{url('admin/registrasi/hapus',$item->id)}}" class="btn btn-danger"  onclick="return confirm('Anda Yakin ingin Menghapus Data {{$item->mahasiswa->nama}}?')">Hapus</a>
                </td>

            </tr>
            @endforeach
        </tbody>    
    </table>
</div>


@endsection

