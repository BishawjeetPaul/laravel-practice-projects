<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('home');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::middleware(['construction'])->group(function() {
    Route::get('/stock', function () {
        return view('stock');
    });

    Route::get('/report', [ReportController::class, 'show']);
});
