<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentValidationController extends Controller
{
    //
    public function create(){
        return view("student");
    }
    public function show(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'age'=>'numeric',
            'password'=>'required|min:6'
        ]);
        return "Validation Passed";
    }
}
