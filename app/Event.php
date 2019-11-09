<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'address',
        'start', 
        'end',
        'long',
        'lat'
    ];
}
