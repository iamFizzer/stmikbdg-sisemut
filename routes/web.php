<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\KirimController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get('/', function () {
    return view('pilihan');
});
Route::get('/add',function(){
    return view('main.index');
});
Route::get('/show',[KirimController::class, 'show'])->name('show');
Route::post('/cekdosen',[KirimController::class, 'kirim'])->name('kirim');
// Route::post('/kirimdosen', [KirimController::class, 'kirim']);
Route::post('/addAntrian',[KirimController::class, 'tambahantrian']);
Route::get('/admin/selesai/antrian/{id}',[KirimController::class, 'selesaiAntrian']);

Route::get('/admin',[adminController::class , 'admins']);
Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// ini route resorce bundle

Route::resource('/admin/pengguna',PenggunaController::class);
Route::resource('/admin/user',UserController::class);
Route::resource('/admin/antrian',AntrianController::class);
