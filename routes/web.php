<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    //return "About Page";
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


