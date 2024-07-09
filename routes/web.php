<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;


Route::resource('karyawans', KaryawanController::class);

