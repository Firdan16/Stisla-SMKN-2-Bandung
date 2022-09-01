<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bioController;
use App\Http\Controllers\RgController;
use App\Http\Controllers\LgController;

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

// Route::get('/tampil', function () {
//     return view('pages.tampil');
// });

Route::get('/input', function () {
    return view('pages.input');
});

Route::post('/simpanData', [bioController::class,'simpanData']);

Route::get('/tampil', [bioController::class,'index']);

Route::get('/ubah/{id}', [bioController::class,'ubah']);
Route::PUT('/perbaharui/{id}', [bioController::class,'data']);

Route::delete('/hapus/{id}',[bioController::class,'hapusData'])->name('hapus');



// Web  Register

Route::get('/rgTambah', function () {
    return view('register.rgTambah');
});

Route::post('/addData', [RgController::class,'addData']);

Route::get('/rgTampil', [RgController::class,'index']);

Route::get('/rgEdit/{id}', [RgController::class,'updateData']);
Route::PUT('/updateData/{id}', [RgController::class,'data']);

Route::delete('/hapus/{id}',[RgController::class,'deleteData'])->name('hapus');


// Web Login

Route::get('/lgTampil', function () {
    return view('login.lgTampil');
});

Route::post('/authlogin', [LgController::class,'Login']);

Route::get('/navbar', [RgController::class,'index']);


Route::get('/logout', function(){
    Auth::logout();
        return redirect('/lgTampil');
});