<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    // public function insertMovie(){
    //     DB::table('movies')->insert([
    //         // 'movie_name'=>'KGF',
    //         // 'rating'=>5,
    //         // 'description'=>'Action Movie',
    //         // 'release_date'=>'2022-01-10',
    //         // 'created_at'=>now(),
    //         // 'updated_at'=>now()
    //         'movie_name'=>'Bahubali',
    //         'rating'=>4,
    //         'description'=>'Historical Movie',
    //         'release_date'=>'2020-05-10',
    //         'created_at'=>now(),
    //         'updated_at'=>now()
    //     ]);
    //     return "Movie Inserted Successfully";
    // }
    
    public function showMovies(){
        $movies=DB::table('movies')->get();
        return $movies;
    }

    // public function showSingleMovie($id){
    //     $movie=DB::table('movies')->where('id',$id)->first();//first()->return only one record
    //     return $movie;
    // }

    // public function updateMovie($id){
    //     DB::table('movies')->where('id',$id)
    //     ->update([
    //         'rating'=>10,
    //         'movie_name'=>'Updated Movie'
    //     ]);
    //     return "Movie Updated Successfully";
    // }

    public function deleteMovie($id){
        DB::table('movies')->where('id',$id)->delete();
        return "Movie Deleted Successfully";
    }
}
