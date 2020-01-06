<?php

namespace App\Http\Controllers\Dao;



use App\location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class daoLocation extends Controller
{
    public function getAll()
    {
        $test=location::with('tickets')->get();
        return response()->json($test, 200);
    }

    public function get($id)
    {
        $test=location::with('intickets')->get()->find($id);
        return response()->json($test, 200);
    }

    public function add(Request $request)
    {
        $location = new location();
        $location->nameGedung = $request->nameGedung;
        $location->city_id = $request->city_id;
        $location->save();
    }

    public function update(Request $request, $id)
    {
        $nameGedung = $request->nameGedung;
        $city_id = $request->city_id;

        $location = location::all()->find($id);
        $location->nameGedung = $nameGedung;
        $location->city_id = $city_id;
        $location->save();
    }

    public function delete($id)
    {
        $location = location::all()->find($id);
        try {
            $location->delete();
        } catch (\Exception $e) {
        }
    }
}
