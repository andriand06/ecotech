@extends('layouts.app')
@section('content')
<h1>{{$judul}}</h1>
@if(session('pesan'))
<div class="alert alert-success">{{session('pesan')}}</div>
@endif
<a href="{{url('admin/user/tambah')}}">Tambah Data</a>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($isi as $user)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><a href="{{route('user.edit',$user)}}">Edit Data</a>
            <td><form action="{{route('user.delete',$user)}}" method="post">
                @csrf
                    <button type="submit" class="btn btn-primary" >Delete</button>
                </form>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

