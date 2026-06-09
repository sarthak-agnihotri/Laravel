<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    public function show(){
        $students=['Aman','Sarthak','Rahul'];
        $course=(object)[
            'name'=>'Laravel',
            'duration'=>'3 Months'
        ];
        $message='Welcoe to Laravel';
        return view('q10',compact('students','course','message'));
    }
}
