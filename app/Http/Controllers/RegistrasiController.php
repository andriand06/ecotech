<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function index()
    {
        $registrasi = \App\Registrasi::latest()->paginate(20);
        $data['isi'] = $registrasi;
        $data['judul'] = 'Data Registrasi Mahasiswa Baru';
        return view('registrasi/index',$data);
    }
    public function syarat($id)
    {
        $registrasi = \App\Registrasi::findOrFail($id);
        return view('/registrasi/syarat',compact('registrasi'));
    }

    public function hapus($id)
    {   
        $registrasi = \App\Registrasi::findOrFail($id);
        if($registrasi->status == 'baru')
        {
            \DB::beginTransaction();
            $mahasiswa = \App\Mahasiswa::findOrFail($registrasi->mahasiswa_id);
            $file = $registrasi->syarats()->pluck('file')->toArray();
            \Storage::delete($file);
            $registrasi->syarats()->delete();
            $registrasi->delete();
            $mahasiswa->delete();
            \DB::commit();
            return back()->with('pesan','Data Berhasil dihapus!');
        } else {
            return back()->with('pesan','Data tidak bisa dihapus,status registrasi bukan baru.'); 
        }
       
    }

    public function syaratForm($id){
        $syarat = \App\RegistrasiSyarat::findOrFail($id);
        $data['syarat'] =$syarat;
        return view('registrasi.syarat-form',$data);
    }

    public function syaratSimpan(Request $request)
    {
        $syarat = \App\RegistrasiSyarat::findOrFail($request->id);
        $syarat->keterangan = strip_tags($request->keterangan);
        $syarat->status = $request->status;
        $syarat->save();
        return back()->with('pesan','Data berhasil diupdate');
    }
    public function update($id)
    {
        $registrasi = \App\Registrasi::findOrFail($id);
        $syarat = $registrasi->syarat()->whereIn('status',['baru','diperbaiki']); 
        if($syarat->exist())
        {
            return back()->with('pesan','Status Gagal diupdate,Silahkan perbaiki Syarat Pendaftaran');
        }
        else {
            $registrasi->status = 'diterima';
            $registrasi->save();
            return back()->with('pesan','Status berhasil di Update');
        }
        
        
    }
}
