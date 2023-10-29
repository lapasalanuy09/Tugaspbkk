<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BukuController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PenulisController;

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

// // Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/', HomeController::class);
Route::resource('/mahasiswa', MahasiswaController::class);
Route::resource('/buku', BukuController::class);

Route::resource('/books',BookController::class);
Route::resource('/penulis',PenulisController::class);
