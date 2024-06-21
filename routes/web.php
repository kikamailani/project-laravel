<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('porto');
});

Route::get('/porto', function () {
    return view('porto');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/contact', function () {
    return view('contact');
});
