<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    public function tickets()
    {
        return $this->hasMany(ticket::class);
    }

    public function studios()
    {
        return $this->belongsTo(studio::class);
    }

    public function films()
    {
        return $this->belongsTo(film::class);
    }
}
