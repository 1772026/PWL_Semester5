<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi_has_history_detail extends Model
{
    public function transaksis()
    {
        return $this->belongsTo(transaksi::class);
    }

    public function history_details()
    {
        return $this->belongsTo(history_detail::class);
    }
}
