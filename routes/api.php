<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\PelangganApiController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RakController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/pelanggan', [PelangganApiController::class, 'index']);
Route::post('/pelanggan', [PelangganApiController::class, 'store']);
Route::get('/pelanggan/{id}', [PelangganApiController::class, 'show']);
Route::delete('/pelanggan/{id}', [PelangganApiController::class, 'destroy']);
Route::put('/pelanggan/edit/{id}', [PelangganApiController::class, 'update']);

Route::get('/buku', [BukuController::class, 'index']);
Route::post('/buku', [BukuController::class, 'store']);
Route::get('/buku/{id}', [BukuController::class, 'show']);
Route::delete('/buku/{id}', [BukuController::class, 'destroy']);
Route::put('/buku/edit/{id}', [BukuController::class, 'update']);

Route::get('/rak', [RakController::class, 'index']);
Route::post('/rak', [RakController::class, 'store']);
Route::get('/rak/{id}', [RakController::class, 'show']);
Route::delete('/rak/{id}', [RakController::class, 'destroy']);
Route::put('/rak/edit/{id}', [RakController::class, 'update']);

Route::get('/petugas', [PetugasController::class, 'index']);
Route::post('/petugas', [PetugasController::class, 'store']);
Route::get('/petugas/{id}', [PetugasController::class, 'show']);
Route::delete('/petugas/{id}', [PetugasController::class, 'destroy']);
Route::put('/petugas/edit/{id}', [PetugasController::class, 'update']);

Route::get('/pengembalian', [PengembalianController::class, 'index']);
Route::post('/pengembalian', [PengembalianController::class, 'store']);
Route::get('/pengembalian/{id}', [PengembalianController::class, 'show']);
Route::delete('/pengembalian/{id}', [PengembalianController::class, 'destroy']);
Route::put('/pengembalian/edit/{id}', [PengembalianController::class, 'update']);

Route::get('/peminjaman', [PeminjamanController::class, 'index']);
Route::post('/peminjaman', [PeminjamanController::class, 'store']);
Route::get('/peminjaman/{id}', [PeminjamanController::class, 'show']);
Route::delete('/peminjaman/{id}', [PeminjamanController::class, 'destroy']);
Route::put('/peminjaman/edit/{id}', [PeminjamanController::class, 'update']);
