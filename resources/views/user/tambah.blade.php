@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1>Tambah Data</h1>
                    @if(session('pesan'))
                        <div class="alert alert-success">
                        {{session('pesan')}}
                        </div>
                    @endif
                    <form action="{{url('admin/user/simpan')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" id="name" name="name" class="form-control">
                            <span>{{$errors->first('name')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email"class="form-control" >
                        </div>
                        <span>{{$errors->first('email')}}</span>
                        
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <span>{{$errors->first('password')}}</span>
                        <div class="form-group">
                            <label for="password2">Ulangi Password</label>
                            <input type="password" id="password2" name="password2"class="form-control">
                        </div>
                        <span>{{$errors->first('password2')}}</span>
                        <div class="form-group">
                        <input type="submit"value="Submit" class="btn btn-primary">
                        </div>
                        


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection