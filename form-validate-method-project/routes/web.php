<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\RegistrationController;

Route::get('/', [RegistrationController::class, 'showform']);
Route::post('/', [RegistrationController::class, 'signup']);
