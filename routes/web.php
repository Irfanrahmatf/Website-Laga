<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home');
});
Route::get('/resources/views/Home.blade.php', function () {
    return view('Home');
});
Route::get('../views/Home.blade.php', function () {
    return view('Home');
});
Route::get('/resources/views/Cari Aduan.blade.php', function () {
    return view('Cari Aduan');
});
Route::get('/resources/views/layouts/Daftar.blade.php', function () {
    return view('layouts.Daftar');
});
Route::get('/resources/views/layouts/login.blade.php', function () {
    return view('layouts.login');
});
