<?php

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Namespace_;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NavController;

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

Route::get('/user', [NavController::class, 'user']);

Route::get('/user/tambah', [AuthController::class, 'register']);

Route::get('/', [AuthController::class, 'login']) -> middleware('guest');

Route::post('/ceklogin', [AuthController::class, 'ceklogin']);

Route::post('/tambahuser', [AuthController::class, 'tambahuser']);

Route::get('/user/hapus/{id}', [AuthController::class, 'hapususer']);

Route::get('/ruangrapat', [NavController::class, 'ruangrapat']);

Route::get('/ruang/tambah', [NavController::class, 'tambahruang']);

Route::post('/ruang/simpan', [NavController::class, 'simpanruang']);

Route::get('/ruang/edit/{id}', [NavController::class, 'editruang']);
    
Route::put('/ruang/update/{id}', [NavController::class, 'updateruang']);

Route::get('/ruang/hapus/{id}', [NavController::class, 'hapusruang']);

Route::get('/ruang/ketersediaan', [NavController::class, 'daftarruang']);

Route::get('/rapat', [NavController::class, 'rapat']);

Route::get('/tambahrapat', [NavController::class, 'tambahrapat']);

Route::post('/tambah/rapat', [NavController::class, 'simpanrapat']);

// routes/web.php
//Route::post('/form', [NavController::class, 'store'])->name('form.store');


Route::get('/risalah', [NavController::class, 'risalah']);

Route::get('/tambahrisalah/{id}', [NavController::class, 'tambahrisalah']);
    
Route::post('/risalah/simpan', [NavController::class, 'simpanrisalah']);