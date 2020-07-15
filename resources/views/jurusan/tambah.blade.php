@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1>Tambah Data Jurusan</h1>
                    @if(session('pesan'))
                        <div class="alert alert-success">
                        {{session('pesan')}}
                        </div>
                    @endif
                    <form action="{{action('JurusanController@store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control">
                            <span style="color:red">{{$errors->first('nama')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="singkatan">Singkatan</label>
                            <input type="singkatan" id="singkatan" name="singkatan"class="form-control">
                        </div>
                        <span style="color:red">{{$errors->first('singkatan')}}</span>
                        <input type="submit" value="Simpan" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    
</div>


@endsection