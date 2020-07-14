@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">FORM SYARAT PENDAFTARAN</div>
                <div class="card-body">
                    @if(session('pesan'))
                    <div class="alert alert-success">{{session('pesan')}}</div>
                    @endif
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <td width="15%">Nama Syarat</td>
                                <td>:{{strtoupper($syarat->nama)}}</td>
                            </tr>
                            <tr>
                                <td width="15%">Download</td>
                                <td>:<a href="{{\Storage::url($syarat->file)}}" target="_blank">Download Syarat</a></td>
                            </tr>
                            <tr>
                                <td width="15%">Status</td>
                                <td>:{{$syarat->status}}</td>
                            </tr>
                            <tr>
                                <td width="15%">Keterangan</td>
                                <td>:{{$syarat->keterangan}}</td>
                            </tr>
                            
                        </tbody>
                    </table>     
                    <h3>Konfirmasi Syarat</h3>
                    <form action="{{url('admin/registrasi/syarat-simpan',$syarat->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$syarat->id}}">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="Diterima">Terima</option>
                            <option value="Diperbaiki">Perbaikan</option>
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" class="form-control" rows="3"></textarea>
                        
                    </div>
                    <a href="{{route('syarat',$syarat->registrasi_id)}}" class="btn btn-secondary">Kembali</a>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div
@endsection

