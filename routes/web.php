<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('authorization');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/registration', [RegisterController::class, 'create'])->name('register');
Route::post('/registration', [RegisterController::class, 'store']);