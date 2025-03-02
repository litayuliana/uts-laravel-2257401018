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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'home']);
