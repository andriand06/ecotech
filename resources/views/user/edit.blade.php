@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Edit Data</h1>
    @if(session('pesan'))
        <div class="alert alert-success">
        {{session('pesan')}}
        </div>
    @endif
    <form action="{{route('user.update',$users)}}" method="post">
        @csrf
       
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" value="{{$users->name}}">
            <span>{{$errors->first('name')}}</span>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{$users->email}}">
        </div>
        <span>{{$errors->first('email')}}</span>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" value="{{$users->password}}">
        </div>
        <span>{{$errors->first('password')}}</span>
        <div class="form-group">
            <label for="password2">Ulangi Password</label>
            <input type="password" id="password2" name="password2"value="{{$users->password}}">
        </div>
        <span>{{$errors->first('password2')}}</span>
        <div class="form-group">
        <input type="submit"value="Submit">
        </div>
        

   
    </form>
</div>


@endsection