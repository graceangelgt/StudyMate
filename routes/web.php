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
    return view('landingpage');
});

Route::get('/major', function () {
    return view('major');
});

Route::get('/signin', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('regist');
});

Route::post('/', function () {
    // Tangani logika pendaftaran di sini
    return view('landingpage'); // Kembali ke halaman landing page setelah signup
});