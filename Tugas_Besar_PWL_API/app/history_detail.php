<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class history_detail extends Model
{
    public $timestamps = false;
    public function transaksi_has_history_details()
    {
        return $this->hasMany(transaksi_has_history_detail::class);
    }
}
