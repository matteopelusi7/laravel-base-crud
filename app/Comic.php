<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    
    protected $fillable = [
        'title',
        'description',
        'img',
        'price',
        'series',
        'date',
        'type'
    ];

}
