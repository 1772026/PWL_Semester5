<?php

namespace App\Http\Controllers\Dao;


use App\studio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class daoStudio extends Controller
{
    public function getAll()
    {
        return studio::all();
    }

    public function get($id)
    {
        return studio::all()->find($id);
    }

    public function add(Request $request)
    {
        $studio = new studio();
        $studio->nomor_studio = $request->nomor_studio;
        $studio->kapasitas = $request->kapasitas;
        $studio->row = $request->row;
        $studio->column = $request->column;
        $studio->type_studio = $request->type_studio;
        $studio->harga = $request->harga;
        $studio->save();
    }

    public function update(Request $request, $id)
    {
        $nomor_studio = $request->nomor_studio;
        $kapasitas = $request->kapasitas;
        $row = $request->row;
        $column = $request->column;
        $type_studio = $request->type_studio;
        $harga = $request->harga;

        $studio = studio::all()->find($id);
        $studio->nomor_studio = $nomor_studio;
        $studio->kapasitas = $kapasitas;
        $studio->row = $row;
        $studio->column = $column;
        $studio->type_studio = $type_studio;
        $studio->harga = $harga;
        $studio->save();
    }

    public function delete($id)
    {
        $studio = studio::all()->find($id);
        try {
            $studio->delete();
        } catch (\Exception $e) {
        }
    }
}
