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
use App\Http\Controllers\HalamanHome;
use App\Http\Controllers\HalamanProduk;
use App\Http\Controllers\HalamanBerita;
use App\Http\Controllers\HalamanProgram;
use App\Http\Controllers\HalamanAbout;
use App\Http\Controllers\HalamanKontak;
//Nomor 1
Route::get('/', [HalamanHome::class, 'home']);

//Nomor 2 router prefix
Route::prefix('Produk')->group(function(){
    Route::get('/MobileLegends', [HalamanProduk::class, 'MLBB']);
    Route::get('/PubgMobile', [HalamanProduk::class, 'PUBG']);
    Route::get('/FreeFire', [HalamanProduk::class, 'FF']);
    Route::get('/Valorant', [HalamanProduk::class, 'VALO']);
});

//Nomor 3 router param
Route::get('/Berita{id}', [HalamanBerita::class, 'berita']);

//Nomor 4 route prefix
Route::prefix('Program')->group(function(){
    Route::get('/Java', [HalamanProgram::class, 'JAVA']);
    Route::get('/Python', [HalamanProgram::class, 'PYTHON']);
    Route::get('/CPLUS', [HalamanProgram::class, 'CPLUS']);
    Route::get('/PHP', [HalamanProgram::class, 'PHP']);
});

//Nomor 5 route biasa 
Route::get('/About', [HalamanAbout::class, 'about']);

//Nomor 6 route resource only
Route::get('/Kontak', [HalamanKontak::class, 'kontak']);