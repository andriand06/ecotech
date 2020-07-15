@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1>Detail Jurusan</h1>
                    @if(session('pesan'))
                    <div class="alert alert-success">{{session('pesan')}}</div>
                    @endif
                    <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Singkatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jurusan as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->singkatan}}</td> 
                            </tr>
                            @endforeach
                        </tbody>
                 
                    </table>
                    <a href="{{action('JurusanController@index')}}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    
</div>



@endsection

