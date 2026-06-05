<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MongoMovie;

class MongoMovieController extends Controller
{
    //
    public function insert(){
        MongoMovie::create([
            'movie_name' => 'KGF Mongo',
            'rating' => 5,
            'description' => 'Action movie stored in MongoDB',
            'release_date' => '2022-01-01'
        ]);
        return "MongoDB Movie Inserted Successfully";
    }

    public function show(){
        $movies=MongoMovie::all();
        return $movies;
    }

    public function single($id){
        $movie=MongoMovie::find($id);
        return $movie;
    }

    public function update($id){
        $movie=MongoMovie::find($id);
        $movie->update([
            'movie_name'=>'Updated Mongo Movie',
            'rating'=>10
        ]);
        return "Mongo Movie Updated Successfully";
    }

    public function delete($id){
        $movie = MongoMovie::find($id);
        $movie->delete();
        return "Mongo Movie Deleted Successfully";
    }
}
