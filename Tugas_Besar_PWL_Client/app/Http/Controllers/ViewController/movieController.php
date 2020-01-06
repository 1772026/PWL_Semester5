<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class movieController extends Controller
{
    public function index()
    {
        include_once(resource_path() . '\views\movie.blade.php');
//        return view('theater');
    }
}
