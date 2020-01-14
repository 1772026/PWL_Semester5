<?php

namespace App\Http\Controllers\Dao;

use App\genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class daoGenre extends Controller
{
    public function getAll()
    {
        $test=genre::all();

        return response()->json($test, 200);
    }

    public function get($id)
    {
        $test=genre::all()->find($id);
        return response()->json($test, 200);
    }

    public function add(Request $request)
    {
        $genre = new genre();
        $genre->name = $request->name;
        $genre->save();
    }

    public function update(Request $request, $id)
    {
        $name = $request->name;

        $genre = genre::all()->find($id);
        $genre->name = $name;
        $genre->save();
    }

    public function delete($id)
    {
        $genre = genre::all()->find($id);
        try {
            $genre->delete();
        } catch (\Exception $e) {
        }
    }
}
