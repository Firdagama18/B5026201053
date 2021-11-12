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
Route::get('praktikum2','ViewController@showPraktikum2');
Route::get('formets','ViewController@showFormets');

Route::get('show','ViewController@showForm');
Route::post('result','ViewController@result');
