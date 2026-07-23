<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;


class RegistrationController extends Controller
{
    function showform() {
        return view('registration');
    }

    function signup(RegistrationRequest $request) {
        $request->validated();
        return view('registration');
    }
}
