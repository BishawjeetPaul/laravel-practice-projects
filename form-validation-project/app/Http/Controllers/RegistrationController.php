<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    function formshow() {
        return view('registration');
    }


    function signup(Request $request) {

        // print_r('post method');
        // dd($request);
        // print_r($request->all());
        // print_r($request->input());
        // print_r($request->input('name'));
        // print_r($request->name);

        // if($request->has(['name', 'email', 'password'])) {
        //     print_r($request->input('name'));
        //     print_r($request->input('email'));
        //     print_r($request->input('password'));
        // }

        // if($request->hasAny(['name', 'email', 'password'])) {
        //     print_r($request->input('name'));
        //     print_r($request->input('email'));
        //     print_r($request->input('password'));
        // }

        // if($request->filled('name')) {
        //     print_r('inside filled');
        //     print_r($request->input('name'));
        // }

        // if($request->missing('username')) {
        //     print_r('inside missing');
        //     print_r(' username not present');
        // }

        // $request->whenHas('name', function($input){
        //     print_r('Data Modified..!');
        // });

        // $request->whenFilled('name', function($input){
        //     print_r('Data Modified..!');
        // });

        $request->flash();
        // print_r($request->old('name'));
        // print_r($request->old('email'));
        // print_r($request->old('password'));

        // $request->flashOnly(['name', 'email']);
        // print_r($request->old('name'));
        // print_r($request->old('email'));
        // print_r($request->old('password'));

        // $request->flashExcept('password');
        // print_r($request->old('name'));
        // print_r($request->old('email'));
        // print_r($request->old('password'));

        // return redirect('show-data')->withInput();
        // return redirect()->route('show-data')->withInput();

        // return redirect('show-data')->withInput(
        //     $request->except('password')  
        // );
        
        return view('registration');
    }

}
