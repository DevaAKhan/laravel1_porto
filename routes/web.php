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
Route::get('/hello', function(){
    return "Hello Siswa RPL TB";
});
Route::get('/artikel/{judul}', function($nama){
    return "Menampilkan Judul Artikel $nama";
});
Route::get('/kategori/{kategori}/{judul}', function($kategori,$judul){
    return "Kategori : $kategori , Judul : $judul";
});
Route::get('/siswa/{jurusan}/{nama}', function($jurusan,$nama){
    return "<h3>Jurusan : $jurusan</h3> <p>Nama : $nama</p>";
});
Route::get('/pekerja/{profesi}/{nama}/{umur}/{tempat_tanggalLahir}/{alamat}/{pendidikan_akhir}',    function($profesi,$nama,$umur,$ttl,$alamat,$pendidikan){
    return "<p>Profesi : $profesi</p> <p>Nama : $nama</p> 
    <p>Umur : $umur</p> <p>Tempat Tanggal Lahir : $ttl</p> <p>Alamat: $alamat</p> <p>Pendidikan Akhir: $pendidikan</p>";
});
Route::get('/siswa/{nipd}', function($nipd){
    return "NIPD Siswa : $nipd";
})->where('nipd','[A-Z]{2}[0-9]+');

Route::fallback(function(){
    return "Maaf halaman tidak dapat ditemukan!";
});
Route::get('/experience',function(){
    return view('myblog/experience');
});
Route::get('/portofolio', function(){
    return view('myblog/portofolio');
});
Route::get('/home', function(){
    return view('myblog/home');
});
Route::get('/haloo', function(){
    return view('myblog');
});

Route::get('/log',function(){
    return view('mokap/login');
});

Route::get('/reg',function(){
    return view('mokap/register');
});

route::get('/rumah',function(){
    return view('mokap/homes');
});

route::get('/map',function(){
    return view('mokap/map');
});

route::get('/strk',function(){
    return view('mokap/strukturbelanja');
});