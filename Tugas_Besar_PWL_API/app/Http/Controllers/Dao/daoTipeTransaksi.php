<?php

namespace App\Http\Controllers\Dao;


use App\tipe_transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class daoTipeTransaksi extends Controller
{
    public function getAll()
    {
        return tipe_transaksi::all();
    }

    public function get($id)
    {
        return tipe_transaksi::all()->find($id);
    }

    public function add(Request $request)
    {
        $tipeTransaksi = new tipe_transaksi();
        $tipeTransaksi->name = $request->name;
        $tipeTransaksi->save();
    }

    public function update(Request $request, $id)
    {
        $name = $request->name;

        $tipeTransaksi = tipe_transaksi::all()->find($id);
        $tipeTransaksi->name = $name;
        $tipeTransaksi->save();
    }

    public function delete($id)
    {
        $tipeTransaksi = tipe_transaksi::all()->find($id);
        try {
            $tipeTransaksi->delete();
        } catch (\Exception $e) {
        }
    }
}
