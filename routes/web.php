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
Route::get('praktikum1', function () {
    return view('prak1web');
});
// ulangi cara untuk tugas 4

Route::get('tugas4', function () {
    return view('welcome');
});

Route::get('coba', function () {
    return view('coba');
});

Route::get('praktikum2','ViewController@showPraktikum2');
Route::get('formets','ViewController@showFormets');

Route::get('show','ViewController@showForm');
Route::post('result','ViewController@result');
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

Route::get('/ikan','IkanController@index');
Route::get('/ikan/tambah','IkanController@tambah');
Route::post('/ikan/store','IkanController@store');
Route::get('/ikan/edit/{id}','IkanController@edit');
Route::post('/ikan/update','IkanController@update');
Route::get('/ikan/hapus/{id}','IkanController@hapus');
Route::get('/ikan/cari','IkanController@cari');
Route::get('/ikan/detail/{id}','IkanController@detail');

Route::get('/nilaikuliah','NilaiKuliahController@index');
Route::get('/nilaikuliah/tambah','NilaiKuliahController@tambah');
Route::post('/nilaikuliah/store','NilaiKuliahController@store');
Route::get('/nilaikuliah/edit/{id}','NilaiKuliahController@edit');
Route::post('/nilaikuliah/update','NilaiKuliahController@update');
Route::get('/nilaikuliah/hapus/{id}','NilaiKuliahController@hapus');
Route::get('/nilaikuliah/cari','NilaiKuliahController@cari');
Route::get('/nilaikuliah/detail/{id}','NilaiKuliahController@detail');
