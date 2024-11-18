<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaloController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| 
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

// Route::get('/halo', function () { return 'Hello World!'; })->name('halo');

Route::get('/halo', function () {
    return view('halo');
});

Route::get('/halo/index/{param1}/{param2?}', [HaloController::class, 'index'])->name('halo.index');

Route::post('/post', [HaloController::class, 'post'])->name('halo.post');

Route::post('/makesquare', [HaloController::class, 'makesquare'])->name('halo.makesquare');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');

Route::middleware('role:KASIR,PEGAWAI')->group(function() {
    // Route untuk Kasir dan Pegawai
    Route::get('/biodata', [BiodataController::class, 'index'])->name('biodata');
    Route::get('/biodata/tambah', [BiodataController::class, 'tambah'])->name('biodata.tambah');
});

Route::middleware('role:KASIR')->group(function(){
    // Route untuk Kasir
});

Route::middleware('role:PEGAWAI')->group(function(){
    // Route untuk Pegawai
});



// middleware('auth')->
    Route::post('/biodata/simpan', [BiodataController::class, 'simpan'])->name('biodata.simpan');
    Route::get('/biodata/lihat/{id}', [BiodataController::class, 'lihat'])->name('biodata.lihat');
    Route::get('/biodata/hapus/{id}', [BiodataController::class, 'hapus'])->name('biodata.hapus');
// });