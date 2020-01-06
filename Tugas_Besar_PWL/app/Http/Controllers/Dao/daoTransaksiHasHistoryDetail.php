<?php

namespace App\Http\Controllers\Dao;

use App\transaksi_has_history_detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class daoTransaksiHasHistoryDetail extends Controller
{
    public function getAll()
    {
        return transaksi_has_history_detail::all();
    }

    public function get($id)
    {
        return transaksi_has_history_detail::all()->find($id);
    }

    public function add(Request $request)
    {
        $transaksiHas = new transaksi_has_history_detail();
        $transaksiHas->history_detail_id = $request->history_detail_id;
        $transaksiHas->transaksi_id = $request->transaksi_id;
        $transaksiHas->save();
    }

    public function update(Request $request, $id)
    {
        $history_detail_id = $request->history_detail_id;
        $transaksi_id = $request->transaksi_id;

        $transaksiHas = transaksi_has_history_detail::all()->find($id);
        $transaksiHas->history_detail_id = $history_detail_id;
        $transaksiHas->transaksi_id = $transaksi_id;
        $transaksiHas->save();
    }

    public function delete($id)
    {
        $transaksiHas = transaksi_has_history_detail::all()->find($id);
        try {
            $transaksiHas->delete();
        } catch (\Exception $e) {
        }
    }
}
