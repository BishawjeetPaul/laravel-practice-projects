<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home-page');
});


Route::get('/contact-us', function () {
    return view('contact-us');
});


Route::get('/join-us', function () {
    return view('join-us');
});