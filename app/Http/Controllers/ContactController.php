<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $current=url()->current();
        $previous=url()->previous();
        $full=url()->full();
        $name="Sarthak";
        // return view('contact',['name' => $name]);
        return view('contact', [
        'name' => $name,
        'current' => $current,
        'previous' => $previous,
        'full' => $full
    ]);
        
    }
}
