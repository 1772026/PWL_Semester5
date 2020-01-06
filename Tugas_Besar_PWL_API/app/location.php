<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    public $timestamps = false;
    public function tickets()
    {
        return $this->hasMany(ticket::class);
    }

    public function citys()
    {
        return $this->belongsTo(city::class);
    }
}
