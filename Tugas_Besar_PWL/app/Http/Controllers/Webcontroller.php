<?php

namespace App\Http\Controllers;

use App\film;
use App\genre;
use App\role;
use Illuminate\Http\Request;

class Webcontroller extends Controller
{
    public function index(){
        $role = role::all();
        return view('role',['role' => $role]);
    }

}
