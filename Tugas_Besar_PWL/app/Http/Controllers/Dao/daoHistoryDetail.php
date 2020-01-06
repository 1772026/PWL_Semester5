<?php

namespace App\Http\Controllers\Dao;


use App\history_detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class daoHistoryDetail extends Controller
{
    public function getAll()
    {
        return history_detail::all();
    }

    public function get($id)
    {
        return history_detail::all()->find($id);
    }

    public function add(Request $request)
    {
        $historyDetail = new history_detail();
        $historyDetail->nama_film = $request->nama_film;
        $historyDetail->harga_studio = $request->harga_studio;
        $historyDetail->type_studio = $request->type_studio;
        $historyDetail->lokasi_gedung = $request->lokasi_gedung;
        $historyDetail->lokasi_tempat = $request->lokasi_tempat;
        $historyDetail->save();
    }

    public function update(Request $request, $id)
    {
        $nama_film = $request->nama_film;
        $harga_studio = $request->harga_studio;
        $type_studio = $request->type_studio;
        $lokasi_gedung = $request->lokasi_gedung;
        $lokasi_tempat = $request->lokasi_tempat;

        $historyDetail = history_detail::all()->find($id);
        $historyDetail->nama_film = $nama_film;
        $historyDetail->harga_studio = $harga_studio;
        $historyDetail->type_studio = $type_studio;
        $historyDetail->lokasi_gedung = $lokasi_gedung;
        $historyDetail->lokasi_tempat = $lokasi_tempat;
        $historyDetail->save();
    }

    public function delete($id)
    {
        $historyDetail = history_detail::all()->find($id);
        try {
            $historyDetail->delete();
        } catch (\Exception $e) {
        }
    }
}
