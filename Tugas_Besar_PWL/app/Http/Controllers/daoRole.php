<?php

namespace App\Http\Controllers;

use App\role;
use Illuminate\Http\Request;

class daoRole extends Controller
{
    public function getAll()
    {
        return role::all();
    }

    public function get($id)
    {
        return role::all()->find($id);
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
