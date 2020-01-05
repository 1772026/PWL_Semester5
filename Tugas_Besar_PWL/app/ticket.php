<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    public function transaksis()
    {
        return $this->belongsTo(transaksi::class);
    }

    public function jadwals()
    {
        return $this->belongsTo(jadwal::class);
    }

    public function locations()
    {
        return $this->belongsTo(location::class);
    }
}
