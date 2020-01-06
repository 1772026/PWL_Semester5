<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    public $timestamps = false;
    public function film_has_genres()
    {
        return $this->hasMany(film_has_genre::class);
    }
}
