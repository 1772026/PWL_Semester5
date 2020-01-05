<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    public $timestamps = false;
    public function locations()
    {
        return $this->hasMany(location::class);
    }
}
