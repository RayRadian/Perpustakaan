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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', 'BukuController@index');

Route::get('/buku/tambah','BukuController@tambah');
Route::post('/buku/store','BukuController@store');

Route::get('/buku/edit/{id}','BukuController@edit');
Route::post('/buku/update','BukuController@update');

Route::get('/buku/delete/{id}','BukuController@hapus');

Route::get('/buku/cari','BukuController@cari');


Route::get('/member', 'MemberController@index');

Route::get('/member/tambah','MemberController@tambah');
Route::post('/member/store','MemberController@store');

Route::get('/member/edit/{id}','MemberController@edit');
Route::post('/member/update','MemberController@update');

Route::get('/member/delete/{id}','MemberController@hapus');

Route::get('/member/cari','MemberController@cari');
