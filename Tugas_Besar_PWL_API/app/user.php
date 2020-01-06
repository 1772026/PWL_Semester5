<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    public $timestamps = false;
    public function roles()
    {
        return $this->belongsTo(role::class);
    }

    public function transaksis()
    {
        return $this->hasMany(transaksi::class);
    }
}
