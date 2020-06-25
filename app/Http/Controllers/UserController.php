<?php

namespace App\Http\Controllers;
use \App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = \App\User::latest()->get();
        $data['judul'] = 'Data User';
        $data['isi'] = $users;

        return view('user/index',$data);
    }

    public function tambah()
    {
        return view('user/tambah');
    }

    public function simpan()
    {
        $users = new User;
        request()->validate([
            'name' => ['required'],
            'email' => ['required','unique:App\User,email'],
            'password' => ['required','min:8'],
            'password2' => ['same:password']
        ]);
        $users->name = request('name');
        $users->email = request('email');
        $users->password = bcrypt(request('password'));

        $users->save();
        return back()->with('pesan','Data berhasil ditambahkan!');
        
    }
    public function edit(User $users)
    {
        return view('user.edit',compact('users')); 
    }
    public function update(User $users)
    {
        request()->validate([
            'name' => ['required'],
            'email' => ['required','unique:App\User,email'],
            'password' => ['required','min:8'],
            'password2' => ['same:password']
        ]);
        $users->name = request('name');
        $users->email = request('email');
        $users->password = bcrypt(request('password'));
        
        $users->update();
        return back()->with('pesan','Data berhasil diubah!');
        
    }
    public function delete (User $users)
    {
        $users->delete();
        return back()->with('pesan','Data berhasil dihapus');
    }
}
