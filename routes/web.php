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
Route::get('form-login');