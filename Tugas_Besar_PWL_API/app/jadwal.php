<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    public $timestamps = false;

    public function film()
    {
        return $this->belongsTo(film::class);
    }

    public function studio()
    {
        return $this->belongsTo(studio::class);
    }
}
