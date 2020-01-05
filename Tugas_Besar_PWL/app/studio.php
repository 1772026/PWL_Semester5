<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studio extends Model
{
    public $timestamps = false;
    public function jadwals()
    {
        return $this->hasMany(jadwal::class);
    }
}
