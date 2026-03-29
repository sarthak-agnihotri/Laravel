<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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
        //return view('admin.login');//inside view->admin->login
        if(View::exists('admin.signup')){//check view exists or not
            return view('admin.signup');
        }else{
            return "No view found";
        }
    }

    function userName(){
        $name="honey";
        $users=['sarthak','honey','bob'];
        return view('home',['name'=>$name,'admi'=>$users]);
    }
}
