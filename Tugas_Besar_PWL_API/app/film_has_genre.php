<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class film_has_genre extends Model
{
    public $timestamps = false;
    public function film()
    {
        return $this->belongsTo(film::class);
    }

    public function genre()
    {
        return $this->belongsTo(genre::class);
    }
}
