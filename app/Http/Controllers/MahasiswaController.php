<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function formDaftar()
    {
    
        return view('daftar/daftar_form');
    }
    public function simpanDaftar(request $request)
    {

    }
    public function hasilDaftar()
    {
        
    }
}
