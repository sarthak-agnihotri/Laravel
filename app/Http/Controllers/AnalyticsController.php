<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageView;

class AnalyticsController extends Controller
{
    public function index(){
        $views=PageView::all();
        return view('analytics',compact('views'));
    }
}
