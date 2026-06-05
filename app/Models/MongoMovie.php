<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class MongoMovie extends Model
{
    protected $connection='mongodb';
    protected $collection='movies';
    protected $fillable=[
        'movie_name',
        'rating',
        'description',
        'release_date'
    ];
}
