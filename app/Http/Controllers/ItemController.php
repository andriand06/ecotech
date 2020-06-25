<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function index()
    {
        $data = ['title' => 'Data Item',
    ];
    return view('home',$data);
    }
}
