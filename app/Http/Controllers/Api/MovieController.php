<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){
        $movies=Movie::all();
        return response()->json([
            'message'=>'Movies fetched successfully',
            'data'=>$movies
        ]);
    }

    public function show($id){
        $movie=Movie::find($id);
        return response()->json([
            'message'=>'Movie fetched successfully',
            'data'=>$movie
        ]);
    }

    public function store(Request $request){
        $validated=$request->validate([
            'movie_name'=>'required',
            'rating'=>'required|integer|min:1|max:5',
            'description'=>'required',
            'release_date'=>'required|date'
        ]);
        $movie=Movie::create($validated);
        return response()->json([
            'message'=>'Movie created successfully',
            'data'=>$movie
        ]);
    }

    public function update(Request $request,$id){
        $movie=Movie::find($id);
        $movie->update([
            'movie_name' => $request->movie_name,
            'rating' => $request->rating,
            'description' => $request->description,
            'release_date' => $request->release_date
        ]);
        return response()->json([
            'message' => 'Movie updated successfully',
            'data' => $movie
        ]);
    }
    
    public function destroy($id){
        $movie=Movie::find($id);
        $movie->delete();
        return response()->json([
            'message'=>'Movie deleted successfully'
        ]);
    }
}
