<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/tentang', function () {
    return "INI DARI LARAVEL ✅";
});
