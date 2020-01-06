<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class film_has_genre extends Model
{
    public $timestamps = false;
    public function films()
    {
        return $this->belongsTo(film::class);
    }

    public function genres()
    {
        return $this->belongsTo(genre::class);
    }
}
