<?php

namespace App\Http\Controllers\Dao;


use App\film;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class daoFilm extends Controller
{
    public function getAll()
    {
        $test=film::with('film_has_genres','jadwals')->get();
        return response()->json($test, 200);
    }

    public function get($id)
    {
        $test=film::with('film_has_genres','jadwals')->get()->find($id);
        return response()->json($test, 200);;
    }

    public function add(Request $request)
    {
        $film = new film();
        $film->judul = $request->judul;
        $film->durasi = $request->durasi;
        $film->deskripsi = $request->deskripsi;
        $film->poster = $request->poster;
        $film->trailer = $request->trailer;
        $film->save();


    }

    public function update(Request $request, $id)
    {
        $judul = $request->judul;
        $durasi = $request->durasi;
        $deskripsi = $request->deskripsi;
        $poster = $request->poster;
        $trailer = $request->trailer;

        $film = film::all()->find($id);
        $film->judul = $judul;
        $film->durasi = $durasi;
        $film->deskripsi = $deskripsi;
        $film->poster = $poster;
        $film->trailer = $trailer;
        $film->save();
    }

    public function delete($id)
    {
        $film = film::all()->find($id);
        try {
            $film->delete();
        } catch (\Exception $e) {
        }
    }
}
