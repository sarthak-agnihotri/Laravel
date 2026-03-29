<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        return "Sarthak";
    }

    function aboutUser(){
        return "Hello this is sarthak";
    }

    function getUserName($name){
        //return "Hello this is ".$name;
        return view('getuser',['acko'=>$name]);//by using view
    }

    function adminlogin(){
        return view('admin.login');
    }
}
