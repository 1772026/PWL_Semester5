<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    public function users()
    {
        return $this->belongsTo(user::class);
    }

    public function tipe_transaksis()
    {
        return $this->belongsTo(tipe_transaksi::class);
    }

    public function tickets()
    {
        return $this->hasMany(ticket::class);
    }

    public function transaksi_has_history_details()
    {
        return $this->hasMany(transaksi_has_history_detail::class);
    }

}
