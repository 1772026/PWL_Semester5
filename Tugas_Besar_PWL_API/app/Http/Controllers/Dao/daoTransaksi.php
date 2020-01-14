<?php

namespace App\Http\Controllers\Dao;

use App\transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class daoTransaksi extends Controller
{
    public function getAll()
    {
        $test=transaksi::with('user','tipe_transaksi')->get();
        return response()->json($test, 200);
    }

    public function get($id)
    {
        $test=transaksi::with('user','tipe_transaksi')->get()->find($id);
        return response()->json($test, 200);
    }

    public function add(Request $request)
    {
        $transaksi = new transaksi();
        $transaksi->quantity = $request->quantity;
        $transaksi->tanggal_pembayaran = $request->tanggal_pembayaran;
        $transaksi->harga = $request->harga;
        $transaksi->tipe_transaksi_id = $request->tipe_transaksi_id;
        $transaksi->user_id = $request->user_id;
        $transaksi->save();
    }

    public function update(Request $request, $id)
    {
        $quantity = $request->quantity;
        $tanggal_pembayaran = $request->tanggal_pembayaran;
        $harga = $request->harga;
        $tipe_transaksi_id = $request->tipe_transaksi_id;
        $user_id = $request->user_id;

        $transaksi = transaksi::all()->find($id);
        $transaksi->quantity = $quantity;
        $transaksi->tanggal_pembayaran = $tanggal_pembayaran;
        $transaksi->harga = $harga;
        $transaksi->tipe_transaksi_id = $tipe_transaksi_id;
        $transaksi->user_id = $user_id;
        $transaksi->save();
    }

    public function delete($id)
    {
        $transaksi = transaksi::all()->find($id);
        try {
            $transaksi->delete();
        } catch (\Exception $e) {
        }
    }
}
