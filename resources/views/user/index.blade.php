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
                    <a href="{{url('admin/user/tambah')}}" class="btn btn-primary">Tambah Data</a>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($isi as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td><a href="{{route('user.edit',$user)}}" class="btn btn-info">Edit Data</a></td>
                                <td>
                                    <form action="{{route('user.delete',$user)}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-primary" >Delete</button>
                                    </form>
                                </td>
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

