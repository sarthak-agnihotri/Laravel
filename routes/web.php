<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return view('home');
});

//redirect
Route::redirect('/home','/');

//dynamic data
Route::get('/about/{name}',function($name){
    return view('about',['name'=>$name]);
});

//controller
Route::get('user',[UserController::class,'getUser']); 
Route::get('about',[UserController::class,'aboutUser']);
Route::get('user/{name}',[UserController::class,'getUserName']);
Route::get('admin',[UserController::class,'adminlogin']);
Route::get('user-login',[UserController::class,'userName']);


//Attaching Header
Route::get('/header-example/{name}',function($name){
    return response("Hello $name")->header('content-type','text/plain');
});
//Dynamic data passing
Route::get('/check/{name?}',function($name='Guest'){
    return response("Hello $name")->header('content-type','text/plain');
});