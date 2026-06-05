<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{   
    use HasFactory;//add a special method
    protected $fillable=[
        'movie_name',
        'rating',
        'description',
        'release_date'
    ];
}
