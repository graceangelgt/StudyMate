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

Route::get('/user', function () {
    return view('landingpage2');
});

Route::get('/major', function () {
    return view('major');
});

Route::get('/modul', function () {
    return view('modul');
});

Route::post('/modul', function () {
    return view('modul');
});

Route::get('/token', function () {
    return view('token');
});

Route::get('/pilihjadwal', function () {
    return view('pilihjadwal');
});

Route::get('/liveroom', function () {
    return view('liveroom');
});

Route::get('/createmodul', function () {
    return view('createmodul');
});

Route::get('/signin-signup', function () {
    return view('loginRegis');
});

Route::get('/loginRegis', function () {
    return view('/');
});

Route::post('/user', function () {
    // Tangani logika pendaftaran di sini
    return view('landingpage2'); // Kembali ke halaman landing page setelah signup
});

Route::get('/shareroom', function () {
    return view('shareroom');
});