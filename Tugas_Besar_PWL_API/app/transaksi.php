<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(user::class)->with('role');
    }

    public function tipe_transaksi()
    {
        return $this->belongsTo(tipe_transaksi::class);
    }
}
