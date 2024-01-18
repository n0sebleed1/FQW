<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('authorization');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/create', function () {
    return view('create');
});