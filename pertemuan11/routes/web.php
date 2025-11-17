<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TentangController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/tentang', [TentangController::class, 'index']);
