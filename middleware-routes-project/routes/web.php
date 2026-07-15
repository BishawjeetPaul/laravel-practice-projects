<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('home');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('construction');


Route::get('/stock', function () {
    return view('stock');
})->middleware('construction');


Route::get('/report', [ReportController::class, 'show'])->middleware('construction');
