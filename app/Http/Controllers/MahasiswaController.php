<?php

namespace App\Http\Controllers;
use App\Jurusan;
use App\Mahasiswa;
use App\Registrasi;
use App\Syarat;
use App\RegistrasiSyarat;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function formDaftar(Jurusan $jurusan)
    {
        $jurusan = \App\Jurusan::latest()->get();
        
        return view('daftar/daftar_form',compact('jurusan'));
    }
    public function simpanDaftar(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required|email|unique:mahasiswas,email',
            'password' => 'required','min:8',
            'asal_sekolah' =>'required',
            'foto' =>'required|mimes:jpg,png,jpeg',
            'jurusan_id' => 'required'
        ]);
        $path = $request->file('foto')->store('public/foto-mahasiswa');
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->jk = $request->jk;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->email = $request->email;
        $mahasiswa->password = bcrypt($request->password);
        $mahasiswa->asal_sekolah = $request->asal_sekolah;
        $mahasiswa->foto = $path;
        $mahasiswa->save();
       
        $registrasi = new Registrasi;
        $registrasi->user_id = '1';
        $registrasi->mahasiswa_id = $mahasiswa->id;
        $registrasi->jurusan_id = $request->jurusan_id;
        $registrasi->status = 'baru';
        $registrasi->save();

        \Auth::guard('mahasiswa')->login($mahasiswa);
        return redirect('mahasiswa/beranda') ->with('pesan','Registrasi Berhasil!');
       
    }
    public function beranda()
    {
        if (\Auth::guard('mahasiswa')->check()) 
        {
            $syarat = \App\Syarat::latest()->get();
            $data['syarat'] = $syarat;
            $data['registrasi'] = \App\Registrasi::whereMahasiswaId(\Auth::guard('mahasiswa')->user()->id)->first();
            return view ('mahasiswa/beranda',$data);
        }
        else {
            return redirect('form-login');
        }
    }
    public function formLogin()
    {
        if(\Auth::guard('mahasiswa')->check())  {
            return redirect('mahasiswa/beranda');
        }
        return view ('form_login');
    }
    
    public function prosesLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required|min:8'
        ]);
        $credentials = [
            'email' => $request->email,
            'password' =>$request->password
        ];
        if(\Auth::guard('mahasiswa')->attempt($credentials)){
            return redirect('mahasiswa/beranda');
        }
        else {
            return back()->with('pesan','Login gagal');
        }
    }
    public function simpanSyarat(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'file' => 'required|file|mimes:png,jpg,jpeg',
        ]);
        $file = $request->file->store('public/syarat-registrasi');
        $syarat = new RegistrasiSyarat;
        $syarat->nama = $request->nama;
        $syarat->file = $file;
        $syarat->status = 'baru';
        $syarat->registrasi_id = \Auth::guard('mahasiswa')->user()->registrasi()->take(1)->first()->id;
        $syarat->save();

        return back()->with('pesan','Data berhasil disimpan');
    }
    public function hapusSyarat(RegistrasiSyarat $syarat)
    {
        if($syarat->registrasi->status == 'diterima')
        {
            return back()->with('pesan','Data tidak bisa dihapus');
        }else {
            $syarat->delete();
            \Storage::delete($syarat->file);
            return back()->with('pesan','Data berhasil dihapus');
        }
       
    }

    public function logout()
    {
        \Auth::guard('mahasiswa')->logout();
        return redirect('/');
    }
}
