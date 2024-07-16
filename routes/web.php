<?php

use Illuminate\Support\Facades\Route;

Route::get('/main', function () {
    return view('layouts/main');
});

Route::get('/dashboard', function () {
    return view('dashboard');
}) -> name('dashboard');

Route::get('/about', function () {
    return view('about');
}) -> name('about');
