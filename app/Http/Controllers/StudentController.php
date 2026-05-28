<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function create(){
        return view('student');
    }

    public function store(Request $request){
        return $request->all();
    }
    public function update(){
        return "Updated";
    }
    public function destroy(){
        return "Student Deleted";
    }
}