<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Collection;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FileUploadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use Illuminate\Support\Facades\App;//localization
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentValidationController;
use App\Http\Controllers\StudentCustomValidationController;
use App\Http\Controllers\QueryStudentController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home',function(){
//     return view('home');
// });

// //redirect
// Route::redirect('/home','/');

// //dynamic data
// Route::get('/about/{name}',function($name){
//     return view('about',['name'=>$name]);
// });

// //controller
// Route::get('user',[UserController::class,'getUser']); 
// Route::get('about',[UserController::class,'aboutUser']);
// Route::get('user/{name}',[UserController::class,'getUserName']);
// Route::get('admin',[UserController::class,'adminlogin']);
// Route::get('user-login',[UserController::class,'userName']);

// //Attaching Header
// Route::get('/header-example/{name}',function($name){
//     return response("Hello $name")->header('content-type','text/plain');
// });
// //Dynamic data passing
// Route::get('/check/{name?}',function($name='Guest'){
//     return response("Hello $name")->header('content-type','text/plain');
// });
// //Multiple Header
// Route::get('/multi-header',function(){
//     return response("Hello World")
//     ->header('content-type','text/plain')
//     ->header('x-custom-header','myvalue');
// });

// //set Cookie
// Route::get('/set-cookie/{name?}',function($name='Harry'){
//     return response("Hello $name, your cookie has been set!")
//     ->cookie('user_name',$name,0.033);
// });

// //JSON
// /*Lightweight: easy to send over the network
// Readable: both humans and machines can understand it
// Cross-platform: can be used in web apps, mobile apps, and other APIs*/
// Route::get('/json-example',function(){
//     return response()->json([
//         'name'=>'John',
//         'age'=>25
//     ]);
// });
// //add status code
// Route::get('/json-exam',function(){
//     return response()->json([
//         'name'=>'John',
//         'age'=>25
//     ],201);
// });

// //Adding headers or cookie with json
// Route::get('/json-with-cookie',function(){
//     return response()->json([
//         'message'=>'Hello John'
//     ])
//     ->header('x-custom-header','myvalue')
//     ->cookie('user_name','John',60);
// });

// //Named Routes
// Route::get('/hello',function(){
//     return view('test');
// })->name('test');

// Route::get('/greet/{id}',function($id){
//     return view('test',['id'=>$id]);
// })->name('greet');

// Route::get('/users/{name?}',function($name='GUEST'){
//     return view('test',['name'=>$name]);
// })->name('users');

// //Multiple data
// Route::get('/students',function(){
//     $students=['Alice','Bob','Charlie'];
//     return view('test',['students'=>$students]);
// });
// //Multipe data with named route
// Route::get('/students-list',function(){
//     $students=['Alice','Bob','Charlie'];
//     return view('test',['students'=>$students]);
// })->name('students.list');

// //using compact function
// Route::get('/compact-students',function(){
//     $students=['Alice','Bob','Charlie'];
//     return view('test',compact('students'));
// })->name('students.compact');

// //Middleware
// Route::get('/check-age',function(){
//     return "You are old enough to access this page.";
// })->middleware('check.age');

// Route::get('/dashboard',function(){
//     return view('dashboard');
// })->middleware('check.login');

// Route::get('/details',function(){
//     $students=collect([
//         ['name'=>'Alice','marks'=>85],
//         ['name'=>'Bob','marks'=>92],
//         ['name'=>'Charlie','marks'=>78]
//     ]);
//     $filtered=$students->where('marks','>',80);
//     return view('details',['students'=>$filtered]);
// });
// //Login and Dashboard
// Route::get('/login',function(){
//     return view('login');
// });
// Route::post('/login',function(){
//     return redirect('/dashboard')->with('message','Login successful!');
// });
// Route::get('/dashboard',function(){
//     return view('dashboard');
// });

// //Route resource controller
// Route::resource('products',ProductController::class);

// //NEXT TOPIC: Blade Template Inheritance (Layout System)
// Route::get('/homelayout',function(){
//     return view('homelayout');
// });

//Single Action Controller
// Route::get('/contact',ContactController::class);

//Advanced Routing
//Named Route with Parameters
// Route::get('/home-page',function(){
//     return "Home Page";
// })->name('home');

//Parameter Constraints
// Route::get('/constraint/{id}',function($id){
//     return "User ID: $id";
// })->where('id','[0-9]+');
// Route::get('/alpha/{name}',function($name){
//     return "Name: $name";
// })->where('name','[A-Za-z]+');

//Request Data-Retrieval+ Old Input
/*Route::get('/form',function(){
     return view('simple-form');
});*/
/* Route::post('/save',function(Request $request){
     $validated= $request->validate([
         'name' => 'required',
         'email' => 'required|email:filter',
         'message' => 'required'
     ]);

  return "Form submitted successfully!";
});*/

Route::get('/form',[FormController::class,'showForm']);
Route::post('/save',[FormController::class,'submitform']);

//Upload Files
/*Route::get('/upload-form',function(){
    return view('upload-form');
});*/
/*Route::post('/upload',function(Request $request){
    $request->validate([
        'file'=>'required|file|mimes:jpg,png,pdf|max:2048'
    ]);
    if($request->hasFile('file')){
        $file=$request->file('file');
        $pathname=time().'_'.$file->getClientOriginalName();
        $path=$file->storeAs('uploads',$pathname,'public');
        return "File uploaded successfully! Path: $path";
    }
    return "No file uploaded.";
});*/

Route::get('/upload-form',[FileUploadController::class,'showUploadForm']);
Route::post('/upload',[FileUploadController::class,'uploadFile']);

//Cookies
Route::get('/set-user-cookie',function(){
    return response("User cookie has been set!")
    ->cookie('user_name','John Doe',60);
});
Route::get('/get-user-cookie',function(Request $request){
    $userName=$request->cookie('user_name');
    return "User Name from Cookie: $userName";
});
Route::get('/all-cookies',function(Request $request){
    $cookies=$request->cookies->all();
    return response()->json($cookies);
});
Route::get('/delete-user-cookie',function(){
    return response("User cookie has been deleted!")
    ->cookie('user_name',null,-1);
});

//Exercise 1:
// Ek cookie banao "preferred_language" jo user select kare - Hindi ya English agar hindi to hindi mai message print ho verna english mai. Agar user invalid language select kare to error message show karo.
Route::get('/set-language/{lang}',function($lang){
    if(in_array($lang,['Hindi','english'])){
        return response("Preferred language set to $lang")
        ->cookie('preferred_language',$lang,60);
    }
    return "Invalid language selected. Please choose 'hindi' or 'english'.";
});
Route::get('/greet-user',function(Request $request){
    $language=$request->cookie('preferred_language','english');
    if($language=='Hindi'){
        return "Namaste! Aapka swagat hai.";
    }
    return "Hello! Welcome to our website.";
});
//Exercise 2:
// Ek cookie banao "theme" jo user select kare - light ya dark agar light to light theme apply ho verna dark theme apply ho. Agar user invalid theme select kare to error message show karo.
Route::get('/set-theme/{theme}',function($theme){
    if(in_array($theme,['light','dark'])){
        return response("Theme set to $theme")
        ->cookie('theme',$theme,60);
    }
    return "Invalid theme selected. Please choose 'light' or 'dark'.";
});
Route::get('/apply-theme',function(Request $request){
    $theme=$request->cookie('theme','light');
    if($theme=='dark'){
        return "Dark theme applied.";
    }
    return "Light theme applied.";
});
//Exercise 3:
// Ek cookie banao "visit_count" jo user ke visit count ko track kare. Har bar user site visit kare to count increment ho. Agar count 5 se zyada ho jaye to user ko special offer ka message show karo.
Route::get('/track-visit',function(Request $request){
    $visitCount=$request->cookie('visit_count',0);
    $visitCount++;
    $response=response("Visit count: $visitCount")
    ->cookie('visit_count',$visitCount,60);
    if($visitCount>5){
        $response->setContent("Visit count: $visitCount. Special offer for you!");
    }
    return $response;
});

//Sending Mail
// Route::get('/send-mail',function(){
//     Mail::to('sarthak.agnihotri2003@gmail.com')->send(new TestMail());
//     return "Mail Sent Successfully";
// });
Route::get('/send-mail',function(){
    Mail::to('sarthak.agnihotri2003@gmail.com')->send(new TestMail("Dell"));
    return "Mail Sent Successfully";
});

//Localization lang.
Route::get('/lang/{locale}',function($locale){
    App::setLocale($locale);
    return view('language');
});//What is Localization in Laravel?

//Localization is the process of displaying application content in multiple languages based on user preference.

//storing session
Route::get('/store-session',function(){
    session([
        'name'=>'sarthak'
    ]);
    return "Session stored";
});
//read session
Route::get('/read-session',function(){
    return session('name');
});
//delete session
Route::get('/delete-session',function(){
    session()->forget('name');
    return "Session Deleted";
});
//Multi-session
Route::get('/multi-session',function(){
    session([
        'name' => 'Sarthak',
        'city' => 'Delhi',
        'course' => 'Laravel'
    ]);
    return "Multiple Session Stored";
});
//access values
Route::get('/show-session', function () {

    echo session('name');
    echo "<br>";

    echo session('city');
    echo "<br>";

    echo session('course');

});
//check session exists
Route::get('/check-session', function () {

    if(session()->has('name'))
    {
        return "Session Exists";
    }

    return "Session Not Found";

});
//delete all session
Route::get('/flush-session',function(){
    session()->flush();
    return "All Session Deleted";
});

//flash session
Route::get('/flash-session',function(){
    session()->flash('success','Data Inserted Successfully');
    return redirect('/show-flash');
});
Route::get('/show-flash',function(){
    return session('success');
});

//Full login form 
Route::get('/login',function(){
    return view('login-user');
});
Route::post('/login-user',function(Request $request){
    $name=$request->name;
    $password=$request->password;
    if($name=="Sarthak"&&$password=="123"){
        session([
            "user"=>$name
        ]);
        return redirect('/dashboard-session');
    }
    return back()->withInput()->with('error','Invalid Login');
});
Route::get('/dashboard-session',function(){
    if(session()->has('user')){
        return "Welcome ".session('user');
    }
    return redirect('/login');
});
Route::get('/logout',function(){
    session()->forget('user');
    return redirect('/login');
});

//Form Validation using CSRF and @Method
// Route::get('/student',[StudentController::class,'create']);
// Route::post('/student',[StudentController::class,'store']);
// Route::put('/student',[StudentController::class,'update']);
// Route::delete('/student',[StudentController::class,'destroy']);

// //Form Validation using validation rules
// Route::get('/create',[StudentValidationController::class,'create']);
// Route::post('/show',[StudentValidationController::class,'show']);
// //Form Validation using Custom validation rules
// Route::get('/create',[StudentCustomValidationController::class,'create']);
// Route::post('/show',[StudentCustomValidationController::class,'show']);

Route::get('/query-insert',[QueryStudentController::class,'insertStudent']);
Route::get('/query-students',[QueryStudentController::class,'showStudents']);
Route::get('/query-student/{id}', [QueryStudentController::class, 'showSingleStudent']);
Route::get('/query-update/{id}', [QueryStudentController::class, 'updateStudent']);
Route::get('/query-delete/{id}', [QueryStudentController::class, 'deleteStudent']);