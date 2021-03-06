<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','BerandaController@index');
Route::get('about','BerandaController@about')->name('about');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->name('user.index');
Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('jurusan/index','JurusanController@index');
    Route::get('jurusan/tambah','JurusanController@create');
    Route::post('jurusan/store','JurusanController@store');
    Route::get('jurusan/edit/{id}','JurusanController@edit');
    Route::post('jurusan/update/{id}','JurusanController@update');
    Route::get('jurusan/show/{id}','JurusanController@show');
    Route::get('jurusan/delete/{jurusan}','JurusanController@delete');

    Route::get('registrasi/index','RegistrasiController@index');
    Route::get('registrasi/hapus/{id}','RegistrasiController@hapus');
    Route::get('registrasi/syarat/{id}','RegistrasiController@syarat')->name('syarat');
    Route::get('registrasi/syarat-form/{id}','RegistrasiController@syaratForm');
    Route::post('registrasi/syarat-simpan/{id}','RegistrasiController@syaratSimpan');
    Route::get('registrasi/update/{id}','RegistrasiController@update');

    Route::get('user/index','UserController@index')->name('user');
    Route::get('user/tambah','UserController@tambah');
    Route::post('user/simpan','UserController@simpan');
    Route::get('user/edit/{users}','UserController@edit')->name('user.edit');
    Route::post('user/update/{users}','UserController@update')->name('user.update');
    Route::post('user/delete/{users}','UserController@delete')->name('user.delete');
});

Route::get('daftar/daftar_form','MahasiswaController@formDaftar')->name('daftar.form');
Route::post('simpan-daftar/','MahasiswaController@simpanDaftar')->name('daftar.simpan');
Route::get('mahasiswa/beranda','MahasiswaController@beranda');
Route::get('form-login','MahasiswaController@formLogin');
Route::get('logout','MahasiswaController@logout');
Route::post('proses-login','MahasiswaController@prosesLogin');

Route::post('simpan-syarat','MahasiswaController@simpanSyarat')->name('simpansyarat');
Route::get('mahasiswa/hapus-syarat/{syarat}','MahasiswaController@hapusSyarat');
