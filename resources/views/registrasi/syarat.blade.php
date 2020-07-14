@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">FORM SYARAT PENDAFTARAN</div>
                <div class="card-body">
                <h1>Data Registrasi <b>{{strtoupper($registrasi->mahasiswa->nama)}}</b> </h1>
                @if(session('pesan'))
                <div class="alert alert-success">{{session('pesan')}}</div>
                @endif
                <table class="table table-sm">
                    <tbody>
                        <tr class="table-dark text-white">
                            <td width="15%">Nama Pendaftar</td>
                            <td>: {{$registrasi->mahasiswa->nama}}</td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>: {{$registrasi->mahasiswa->asal_sekolah}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>: {{$registrasi->mahasiswa->tanggal_lahir}}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: {{$registrasi->mahasiswa->jk}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: {{$registrasi->mahasiswa->email}}</td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>: {{$registrasi->jurusan->nama}}</td>
                        </tr>
                        <tr>
                            <td>Status Pendaftaran</td>
                            <td>: <span class="badge badge-primary" style="font-size:18px;">{{$registrasi->status}}</span></td>
                            
                        </tr>
                    </tbody>
                </table>
                <a onclick="return confirm('apakah anda yakin ingin mengubah status menjadi diterima?')"href="{{url('admin/registrasi/update',$registrasi->id)}}" class="btn btn-primary mb-3 mt-3">Update status menjadi diterima</a>
                
    
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Syarat</th>
                            <th>File Syarat </th>
                            <th>Status Syarat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($registrasi->syarats as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama}}</td>
                            <td>
                            <a href="{{ \Storage::url($item->file) }}" target="_blank">Download</a>
                            </td>
                            <td>
                                {{$item->status}} <br>
                                <i>{{$item->keterangan ?? 'Tidak ada keterangan'}}</i>
                            </td>
                            <td>
                                
                                <a href="{{url('admin/registrasi/syarat-form',$item->id)}}" class="btn btn-primary ml-2">Konfirmasi Syarat Pendaftaran </a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>    
                </table>
                <a href="{{url('admin/registrasi/index')}}">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
    


@endsection

