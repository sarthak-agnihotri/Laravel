<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programmer extends Model
{
    protected $fillable=[
        'name',
        'age',
        'language'
    ];
}
