<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi_has_history_detail extends Model
{
    public $timestamps = false;
    public function transaksi()
    {
        return $this->belongsTo(transaksi::class)->with('tipe_transaksi','user');
    }

    public function history_detail()
    {
        return $this->belongsTo(history_detail::class);
    }
}
