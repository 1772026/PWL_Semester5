<?php

namespace App\Http\Controllers\Dao;


use App\jadwal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class daoJadwal extends Controller
{
    public function getAll()
    {
        $test=jadwal::with('tickets')->get();
        return response()->json($test, 200);
    }

    public function get($id)
    {
        $test=jadwal::with('tickets')->get()->find($id);
        return response()->json($test, 200);;
    }

    public function add(Request $request)
    {
        $jadwal = new jadwal();
        $jadwal->film_id = $request->film_id;
        $jadwal->studio_id = $request->studio_id;
        $jadwal->date_start = $request->date_start;
        $jadwal->show_time = $request->show_time;
        $jadwal->date_end = $request->date_end;
        $jadwal->save();
    }

    public function update(Request $request, $id)
    {
        $film_id = $request->film_id;
        $studio_id = $request->studio_id;
        $date_start = $request->date_start;
        $show_time = $request->show_time;
        $date_end = $request->date_end;

        $jadwal = jadwal::all()->find($id);
        $jadwal->film_id = $film_id;
        $jadwal->studio_id = $studio_id;
        $jadwal->date_start = $date_start;
        $jadwal->show_time = $show_time;
        $jadwal->date_end = $date_end;
        $jadwal->save();
    }

    public function delete($id)
    {
        $jadwal = jadwal::all()->find($id);
        try {
            $jadwal->delete();
        } catch (\Exception $e) {
        }
    }
}
