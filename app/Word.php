<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = ['english', 'japanese', 'spanish'];

    public $timestamps = false;
}
