<?php

namespace App\Http\Controllers;
use App\Jurusan as Model;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Model::paginate(10);
        $data['model'] = $model;
        $data['judul'] = 'Jurusan';
        return view('jurusan/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('jurusan/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model $id)
    {
        $data['jurusan'] = Model::findOrFail($id);
        return view ('jurusan/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusan = Model::findOrFail($id);
        $data['jurusan'] = $jurusan;
        return view('jurusan/edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model $id)
    {
        $jurusan = Model::findOrFail($id);
        $jurusan->delete();
        return back()->with('pesan','Data berhasil dihapus');
    }
}
