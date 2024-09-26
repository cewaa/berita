<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\UserBeritaController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware(['admin'])->group(function () {
    // Route CRUD berita
    Route::resource('berita', BeritaController::class);
});


Route::middleware(['auth'])->group(function () {
    // Route untuk halaman berita user
    Route::get('/dashboard', [BeritaController::class, 'dashboard'])->name('dashboard');

    Route::get('/userberita/{id}', [UserBeritaController::class, 'show'])->name('userberita.show');
});





Route::get('/', function () {
    return view('welcome');
});
