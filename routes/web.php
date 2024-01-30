<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('authorization');
})->middleware('guest')->name('login');

Route::get('/news', function () {
    $user = Auth::user();
    $name = $user->name;
    
    return view('news', ['name' => $name]);
})->middleware('auth')->name('news');

Route::get('/registration', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/registration', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/create', [NewsController::class, 'create'])->middleware('auth')->name('create');
Route::post('/create', [NewsController::class, 'store'])->middleware('auth');