<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipe_transaksi extends Model
{
    public $timestamps = false;
    public function transaksis()
    {
        return $this->hasMany(transaksi::class);
    }
}
