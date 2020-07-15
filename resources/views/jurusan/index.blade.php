@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1>{{$judul}}</h1>
                    @if(session('pesan'))
                    <div class="alert alert-success">{{session('pesan')}}</div>
                    @endif
                    <a href="{{action('JurusanController@create')}}" class="btn btn-primary">Tambah Data</a>
                    <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Singkatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($model as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->singkatan}}</td>
                                <td><a href="{{action('JurusanController@edit',$item->id)}}" class="btn btn-primary">Edit</a></td>
                                <td><a href="{{action('JurusanController@show',$item->id)}}" class="btn btn-primary">Detail</a></td>
                                <td><a href="{{action('JurusanController@delete',$item->id)}}" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a></td>

                                
                            </tr>
                            @endforeach
                        </tbody>
                 
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>



@endsection

