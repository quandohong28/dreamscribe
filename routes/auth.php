<?php

use Illuminate\Support\Facades\Route;

Route::get('/logout', function () {
    return view('shared.login');
})->name('auth.logout');

Route::get('/login', function () {
    return view('shared.login');
})->name('auth.login');

Route::get('/register', function () {
    return view('shared.register');
})->name('auth.register');

Route::get('/welcome', function () {
    return view('shared.welcome');
})->name('auth.welcome');

Route::get('/forgot', function () {
    return view('shared.forgotPassword');
})->name('auth.forgot');

Route::get('/lock', function () {
    return view('shared.lock');
})->name('auth.lock');