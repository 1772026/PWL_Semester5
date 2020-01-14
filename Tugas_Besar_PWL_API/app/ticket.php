<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    public $timestamps = false;
    public function transaksi()
    {
        return $this->belongsTo(transaksi::class)->with('tipe_transaksi','user');
    }

    public function jadwal()
    {
        return $this->belongsTo(jadwal::class)->with('film','studio');
    }

    public function location()
    {
        return $this->belongsTo(location::class)->with('city');
    }
}
