<?php

namespace App\Http\Controllers\Dao;



use App\ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class daoTicket extends Controller
{
    public function getAll()
    {
        $data = ticket::with('transaksi','jadwal','location')->get();
        return response()->json($data,200);
    }

    public function get($id)
    {
        return ticket::all()->find($id);
    }

    public function add(Request $request)
    {
        $ticket = new ticket();
        $ticket->row = $request->row;
        $ticket->seat = $request->row;
        $ticket->transaksi_id = $request->transaksi_id;
        $ticket->location_id = $request->location_id;
        $ticket->Jadwal_id = $request->Jadwal_id;
        $ticket->save();
    }

    public function update(Request $request, $id)
    {
        $row = $request->row;
        $seat = $request->row;
        $transaksi_id = $request->transaksi_id;
        $location_id = $request->location_id;
        $Jadwal_id = $request->Jadwal_id;

        $ticket = ticket::all()->find($id);
        $ticket->row = $row;
        $ticket->seat = $row;
        $ticket->transaksi_id = $transaksi_id;
        $ticket->location_id = $location_id;
        $ticket->Jadwal_id = $Jadwal_id;
        $ticket->save();
    }

    public function delete($id)
    {
        $ticket = ticket::all()->find($id);
        try {
            $ticket->delete();
        } catch (\Exception $e) {
        }
    }
}
