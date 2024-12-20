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
    return view('auth.login');
});

Route::get('auth/register', function () {
    return view('auth.register');
});

Route::get('auth/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('admin/dashboard', function () {
    return view('admin.index');
});
