<?php

namespace App\Http\Controllers\Dao;

use App\role;
use App\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class daoUser extends Controller
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
        $user = new user();
        $user->username=$request->username;
        $user->password=$request->password;
        $user->name = $request->name;
        $user->role_id= $request->role_id;
        $user->save();
    }

    public function update(Request $request, $id)
    {
        $username=$request->username;
        $password=$request->password;
        $name=$request->name;
        $role_id=$request->role_id;

        $user = user::all()->find($id);
        $user->username=$username;
        $user->password=$password;
        $user->name = $name;
        $user->role_id= $role_id;
        $user->save();
    }

    public function delete($id)
    {
        $user = user::all()->find($id);
        try {
            $user->delete();
        } catch (\Exception $e) {
        }
    }
}
