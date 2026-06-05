<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class MongoStudent extends Model
{
    protected $connection='mongodb';
    protected $collection='students';
    protected $fillable=[
        'name',
        'email',
        'course',
        'age'
    ];
}
