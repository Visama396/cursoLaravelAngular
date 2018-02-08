<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productor extends Model
{
    protected $table = 'productoras';

    public function peliculas() {
    	return $this->hasMany('App\Pelicula','productora_id');
    }

}
