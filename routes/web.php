<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\controllers\AbsenController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/abc', [HomeController::class, 'index']);

Route::get('/mahasiswa/{npm}', [MahasiswaController::class, 'view']);
Route::get('/absen/{absen_mahasiswa}', [AbsenController::class, 'view']);


