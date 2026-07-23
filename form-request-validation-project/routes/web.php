<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;


Route::get('/', [RegistrationController::class, 'showform']);
Route::post('/', [RegistrationController::class, 'signup']);
