<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Collection;
use App\Http\Controllers\ProductController;

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
//Multiple Header
Route::get('/multi-header',function(){
    return response("Hello World")
    ->header('content-type','text/plain')
    ->header('x-custom-header','myvalue');
});

//set Cookie
Route::get('/set-cookie/{name?}',function($name='Harry'){
    return response("Hello $name, your cookie has been set!")
    ->cookie('user_name',$name,0.033);
});

//JSON
/*Lightweight: easy to send over the network
Readable: both humans and machines can understand it
Cross-platform: can be used in web apps, mobile apps, and other APIs*/
Route::get('/json-example',function(){
    return response()->json([
        'name'=>'John',
        'age'=>25
    ]);
});
//add status code
Route::get('/json-exam',function(){
    return response()->json([
        'name'=>'John',
        'age'=>25
    ],201);
});

//Adding headers or cookie with json
Route::get('/json-with-cookie',function(){
    return response()->json([
        'message'=>'Hello John'
    ])
    ->header('x-custom-header','myvalue')
    ->cookie('user_name','John',60);
});

//Named Routes
Route::get('/hello',function(){
    return view('test');
})->name('test');

Route::get('/greet/{id}',function($id){
    return view('test',['id'=>$id]);
})->name('greet');

Route::get('/users/{name?}',function($name='GUEST'){
    return view('test',['name'=>$name]);
})->name('users');

//Multiple data
Route::get('/students',function(){
    $students=['Alice','Bob','Charlie'];
    return view('test',['students'=>$students]);
});
//Multipe data with named route
Route::get('/students-list',function(){
    $students=['Alice','Bob','Charlie'];
    return view('test',['students'=>$students]);
})->name('students.list');

//using compact function
Route::get('/compact-students',function(){
    $students=['Alice','Bob','Charlie'];
    return view('test',compact('students'));
})->name('students.compact');

//Middleware
Route::get('/check-age',function(){
    return "You are old enough to access this page.";
})->middleware('check.age');

Route::get('/dashboard',function(){
    return view('dashboard');
})->middleware('check.login');

Route::get('/details',function(){
    $students=collect([
        ['name'=>'Alice','marks'=>85],
        ['name'=>'Bob','marks'=>92],
        ['name'=>'Charlie','marks'=>78]
    ]);
    $filtered=$students->where('marks','>',80);
    return view('details',['students'=>$filtered]);
});
//Login and Dashboard
Route::get('/login',function(){
    return view('login');
});
Route::post('/login',function(){
    return redirect('/dashboard')->with('message','Login successful!');
});
Route::get('/dashboard',function(){
    return view('dashboard');
});

//Route resource controller
Route::resource('products',ProductController::class);