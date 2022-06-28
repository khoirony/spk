<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SolusiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TerbobotController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\PreferensiController;
use App\Http\Controllers\NormalisasiController;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'active' => 'dashboard'
    ]);
})->middleware('auth');

Route::get('/alternatif', [AlternatifController::class, 'index'])->middleware('auth');

Route::get('/tambah', [AlternatifController::class, 'create'])->middleware('auth');
Route::post('/store', [AlternatifController::class, 'store'])->middleware('auth');

Route::get('/search', [AlternatifController::class, 'search'])->name('search')->middleware('auth');

Route::get('/edit/{id}', [AlternatifController::class, 'edit'])->middleware('auth');
Route::put('/update/{id}', [AlternatifController::class, 'update'])->middleware('auth');
Route::get('/hapus/{id}', [AlternatifController::class, 'destroy'])->middleware('auth');

Route::get('/normalisasi', [NormalisasiController::class, 'index'])->middleware('auth');

Route::get('/terbobot', [TerbobotController::class, 'index'])->middleware('auth');

Route::get('/solusi', [SolusiController::class, 'index'])->middleware('auth');

Route::get('/preferensi', [PreferensiController::class, 'index'])->middleware('auth');
