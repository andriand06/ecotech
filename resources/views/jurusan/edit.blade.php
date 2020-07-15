@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1>Edit Data</h1>
                    @if(session('pesan'))
                        <div class="alert alert-success">
                        {{session('pesan')}}
                        </div>
                    @endif
                    <form action="{{action('JurusanController@update',$jurusan->id)}}" method="post">
                        @csrf
                    
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" value="{{$jurusan->nama}}" class="form-control">
                            <span>{{$errors->first('nama')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="singkatan">Singkatan</label>
                            <input type="singkatan" id="singkatan" name="singkatan" value="{{$jurusan->singkatan}}" class="form-control">
                        </div>
                        <span>{{$errors->first('singkatan')}}</span>
                        <input type="submit" value="Simpan" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>  
    </div>
</div>


@endsection