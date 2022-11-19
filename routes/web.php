<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/halaman-1', function () {
    // $nama = 'Yudia Artana';
    // $nim = '21101095';
    // $jurusan = 'Teknik Informatika';
    return view(
        'tes'
    );
});

Route::get('/halaman-2', function () {
    // $nama = 'Yudia Artana';
    // $nim = '21101095';
    // $jurusan = 'Teknik Informatika';
    return view(
        'contoh.tes2'
    );
});

// Route::get('/nasi/{menu}/{jumlah?}', function ($menu, $jumlah=1) {
//     echo "Ini nasi $menu sejumlah $jumlah";
// })->name("menu");

// Route::get('/user/{id}', function ($id) {
//     return "kamu memiliki id = $id";
// });

// Route::get('/user/{id}/{name?}', function ($id, $name="BAMBANG") {
//     return "kamu $name idmu = $id";
// })->whereNumber('id')->whereAlpha('name');

Route::get('/hal', function () {
    $title='judul';
    $content="ini isi";
    return view('halaman',compact('title','content'));
});

Route::get('/cabang', function () {
    $record=array('satu', 'dua');
    return view('cabang',compact('record'));
});

Route::get('/ulang', function () {
    $banyakangka=array('satu', 'dua', 'tiga', 'empat', 'lima');
    return view('ulang',compact('banyakangka'));
});
