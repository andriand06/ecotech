<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa');
    }
    public function jurusan()
    {
        return $this->belongsTo('App\Jurusan');
    }
    public function registrasisyarat()
    {
        return $this->hasMany('App\RegistrasiSyarat');
    }
}
