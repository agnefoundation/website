<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});



Route::get('/dharam-yatra', function () {
    return view('dharam-yatra');
});



Route::get('/course', function () {
    return view('course');
});




Route::get('/our-offering', function () {
    return view('our-offering');
});



