<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LanguageController extends Controller
{
    //
    public function setLanguage($lang){
        Cookie::queue('language',$lang,60);
        return "Language set to ".$lang;
    }

    public function getLanguage(){
        return Cookie::get('language');
    }
}
