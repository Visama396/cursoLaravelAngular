<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    /*const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';*/

    protected $fillable = ['titulo', 'ano', 'identificador', 'poster'];

    public function scopeRockySaga($query) {
    	return $query->where('identificador', 'LIKE', '%rocky%')->orWhere('identificador','LIKE','%creed%');
    }

    public function getRouteKeyName() {
    return 'identificador';
}

    public static function generateUniqueSlug($titulo) {
        $originalSlug = str_slug($titulo);
        $i = 1;
        $slug = $originalSlug;
        $exists = Pelicula::where('identificador', $slug)->count();

        while ($exists) {
            $slug = $originalSlug.'-'.$i;
            $exists = Pelicula::where('identificador', $slug)->count();
            $i++;
        }
    }

    public function productora() {
    	return $this->belongsTo('App\Productor', 'productora_id');
    }

    public function generos() {
    	return $this->belongsToMany('App\Genero');
    }

}
