<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    public $timestamps = false;

    public function role()
    {
        return $this->belongsTo(role::class);
    }
}
