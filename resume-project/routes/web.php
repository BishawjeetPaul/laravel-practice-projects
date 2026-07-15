<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');

Route::get('/skill', function () {
    return view('skill');
})->name('skill');


Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');


Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::get('/services', [ServicesController::class, 'show'])->name('services');

