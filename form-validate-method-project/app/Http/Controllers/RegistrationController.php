<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    function showform() {
        return view('registration');
    }

    function signup(Request $request) {
        // single rule //
        // $validate = $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);

        // Multiple rule specified as array //
        // $validate = $request->validate([
        //     'email' => ['required', 'min:20'],
        //     'password' => ['required'],
        // ]);

        // Multiple rule specified using Single | delimited String //
        $validate = $request->validate([
            'email' => 'required|min:20',
            'password' => 'required',
        ]);

        print_r('Form Validate.....!');
        $input = $request->except('_token');
        return view('registration', ['data'=>$input]);
    }
}
