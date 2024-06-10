<?php

    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('index');
    });

    Route::get('/menu', function () {
        return view('menu');
    });

    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/register', function () {
        return view('auth.register');
    });

    Route::get('/login', function () {
        return view('auth.login');
    });
