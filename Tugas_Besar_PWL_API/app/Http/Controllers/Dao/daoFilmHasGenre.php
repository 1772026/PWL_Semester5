<?php

namespace App\Http\Controllers\Dao;


use App\film;
use App\film_has_genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class daoFilmHasGenre extends Controller
{
    public function getAll()
    {
        $data = film_has_genre::with('genre','film')->get();
        return response()->json($data,200);
    }

    public function get($id)
    {
        return film_has_genre::all()->find($id);
    }

    public function add(Request $request)
    {
        $filmHas = new film_has_genre();
        $filmHas->film_id = $request->film_id;
        $filmHas->genre_id = $request->genre_id;
        $filmHas->save();
    }

    public function update(Request $request, $id)
    {
        $film_id = $request->film_id;
        $genre_id = $request->genre_id;

        $filmHas = film_has_genre::all()->find($id);
        $filmHas->film_id = $film_id;
        $filmHas->genre_id = $genre_id;
        $filmHas->save();
    }

    public function delete($id)
    {
        $filmHas = film_has_genre::all()->find($id);
        try {
            $filmHas->delete();
        } catch (\Exception $e) {
        }
    }
}
