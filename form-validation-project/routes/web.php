<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;



Route::get('/', [RegistrationController::class, 'formshow']);
Route::post('/', [RegistrationController::class, 'signup']);
Route::view('/show-data', 'show-data')->name('show-data');


