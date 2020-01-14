<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    public $timestamps = false;
    public function transaksi()
    {
        return $this->belongsToMany(transaksi::class,'tickets');
    }

    public function jadwal()
    {
        return $this->belongsToMany(jadwal::class,'tickets');
    }
    public function ticket()
    {
        return $this->hasMany(ticket::class);
    }

    public function city()
    {
        return $this->belongsTo(city::class);
    }
}
