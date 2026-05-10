<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function showForm(){
        return view('simple-form');
    }

    //Post request
    public function submitform(Request $request){
        $validated= $request->validate([
            'name' => 'required',
            'email' => 'required|email:filter',
            'message' => 'required'
        ]);
        return "Form submitted successfully!" . $request->name;
    }
}
