<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('client.home');
})->name('client.home');

Route::get('/history', function () {
    return view('client.history');
})->name('client.history');

Route::get('/favourite', function () {
    return view('client.favourite');
})->name('client.favourite');

Route::get('/search', function () {
    return view('client.search');
})->name('client.search');

Route::get('/auth', function () {
    return view('client.auth');
})->name('client.auth');

Route::get('/blog', function () {
    return view('client.blog');
})->name('client.blog');

Route::get('/blogging', function () {
    return view('client.blogging');
})->name('client.blogging');

Route::get('/detail', function () {
    return view('client.detail');
})->name('client.detail');

Route::get('/profile', function () {
    return view('client.profile');
})->name('client.profile');

Route::get('/purchase', function () {
    return view('client.purchase');
})->name('client.purchase');

Route::get('/recharge', function () {
    return view('client.recharge');
})->name('client.recharge');

Route::get('/report', function () {
    return view('client.report');
})->name('client.report');

Route::get('/invoice', function () {
    return view('shared.invoice');
});

require __DIR__ . '/admin.php';
require __DIR__ . '/auth.php';
