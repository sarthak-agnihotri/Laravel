<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class PageView extends Model
{
    protected $connection='mongodb';
    protected $collection='page_views';
    protected $fillable=[
        'page_name',
        'visit_count'
    ];
}
