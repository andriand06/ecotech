<?php

namespace App\Http\Controllers;
use App\Jurusan as Model;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $model = Model::paginate(10);
        $data['model'] = $model;
        $data['judul'] = 'Jurusan';
        return view('jurusan/index',$data);
    }
    public function create()
    {
        return view ('jurusan/tambah');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'singkatan' => 'required'
        ]);
        $jurusan = Model::create(
            $request->all()
        );
        return back()->with('pesan','Data Jurusan berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $jurusan = Model::findOrFail($id);
        $data['jurusan'] = $jurusan;
        return view('jurusan/edit',$data);
    }
    
    public function delete($id)
    {
        $jurusan = Model::findOrFail($id);
        $jurusan->delete();
        return back()->with('pesan','Data berhasil dihapus');
    }
    public function show(Model $id)
    {
        $data['jurusan'] = Model::findOrFail($id);
        return view ('jurusan/show',$data);
    }
    public function update($id)
    {
        $jurusan = Model::findOrFail($id);
        request()->validate([
            'nama' => 'required',
            'singkatan' => 'required'
        ]);
        $jurusan->nama = request('nama');
        $jurusan->singkatan = request('singkatan');
        $jurusan->update();
        return back()->with('pesan','Data berhasil diupdate');
    }
}

