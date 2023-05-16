<?php

use App\http\Controllers\SungaiIndonesiaController;
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

Route::get('/', [SungaiIndonesiaController::class, 'index']);
Route::get('/tambah', [SungaiIndonesiaController::class, 'tambah']);
Route::post('/tambah', [SungaiIndonesiaController::class, 'store']);
Route::get('/hapus/{id}', [SungaiIndonesiaController::class, 'hapus']);
Route::get('/edit/{id}', [SungaiIndonesiaController::class, 'edit']);
Route::post('/edit/{id}', [SungaiIndonesiaController::class, 'update']);
Route::get('/lihat/{id}', [SungaiIndonesiaController::class, 'lihat']);

