<?php

namespace App\Http\Controllers\Dao;

use App\role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class daoRole extends Controller
{
    public function getAll()
    {
        $test=role::with('users')->get();
        return response()->json($test, 200);
    }

    public function get($id)
    {
        $test=role::with('users')->get()->find($id);
        return response()->json($test, 200);
    }

    public function add(Request $request)
    {
        $role = new role();
        $role->name = $request->name;
        $role->save();
    }

    public function update(Request $request, $id)
    {
        $name = $request->name;

        $role = role::all()->find($id);
        $role->name = $name;
        $role->save();
    }

    public function delete($id)
    {
        $role = role::all()->find($id);
        try {
            $role->delete();
        } catch (\Exception $e) {
        }
    }
}
