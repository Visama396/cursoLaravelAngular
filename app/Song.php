<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['identifier', 'name', 'lyrics', 'singer', 'band'];

    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'identifier';
    }

    public static function generateUniqueSlug($name)
    {
        $originalSlug = str_slug($name);
        $i = 1;
        $slug = $originalSlug;
        $exists = Song::where('identifier', $slug)->count();

        while ($exists) {
            $slug = $originalSlug.'-'.$i;
            $exists = Song::where('identifier', $slug)->count();
            $i++;
        }
        return $slug;
    }
}