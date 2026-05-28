<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\AdultAge;
use App\Rules\CapitalLetter;
use App\Rules\StrongPassword;

class StudentCustomValidationController extends Controller
{
    //
    public function create(){
        return view('student');
    }
    public function show(Request $request){
        $request->validate(
            [
            // 'name' => 'required',
            'name' => ['required',new CapitalLetter],
            'email' => 'required|email',
            // 'age' => 'numeric',
            'age'=>['numeric',new AdultAge],//custom rules
            // 'password' => 'required|min:6',
            'password' => ['required','min:6',new StrongPassword],
            'file'=>'required|image|max:2048|mimes:jpg,png,jpeg'
        ],
        [
            'name.required'=>'Please enter your name',
            'email.required'=>'Email cannot be empty',
            'email.email'=>'Enter proper email address',
            'age.numeric'=>'Age must be a number',
            'password.required'=>'Password is mandatory',
            'password.min'=>'Password must contain at least 6 characters',
            'file.required' => 'Please upload image',
            'file.image' => 'Only image files allowed',
            'file.max' => 'Image size must be less than 2MB',
            'file.mimes'=>"File should br in this format"
        ]);
        return "Form Submitted Successfully";
    }
}
