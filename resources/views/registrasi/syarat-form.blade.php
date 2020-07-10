@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">FORM SYARAT PENDAFTARAN</div>
                <div class="card-body">
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
                            
                        </tbody>
                    </table>        
                </div>
            </div>
        </div>
    </div>
    
</div
@endsection

