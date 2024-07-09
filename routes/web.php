<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

// Halaman Utama (Home)
Route::get('/', function () {
    return view('home');
})->name('home');

// CRUD Karyawan
Route::resource('karyawans', KaryawanController::class);
