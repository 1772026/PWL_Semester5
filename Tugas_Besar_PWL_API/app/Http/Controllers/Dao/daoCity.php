<?php

namespace App\Http\Controllers\Dao;


use App\city;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class daoCity extends Controller
{
    public function getAll()
    {
        $test=city::all();
        return response()->json($test, 200);
    }

    public function get($id)
    {
        $test=city::all()->find($id);
        return response()->json($test, 200);
    }

    public function add(Request $request)
    {
        $city = new city();
        $city->name = $request->name;
        $city->save();
    }

    public function update(Request $request, $id)
    {
        $name = $request->name;

        $city = city::all()->find($id);
        $city->name = $name;
        $city->save();
    }

    public function delete($id)
    {
        $city = city::all()->find($id);
        try {
            $city->delete();
        } catch (\Exception $e) {
        }
    }
}
