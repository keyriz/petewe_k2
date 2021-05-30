<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitusController;

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

Route::get('/', [SitusController::class, 'absen'])->name('absen');
Route::get('/absen', [SitusController::class, 'absen'])->name('absen');
Route::get('/kelas', [SitusController::class, 'kelas'])->name('kelas');
Route::get('/semester', [SitusController::class, 'semester'])->name('semester');
Route::get('/siswa', [SitusController::class, 'siswa'])->name('siswa');
