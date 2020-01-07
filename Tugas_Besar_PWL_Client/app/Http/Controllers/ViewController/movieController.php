<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Util\ApiService;
use Illuminate\Http\Request;

class movieController extends Controller
{
    public function index()
    {
        $movie=ApiService::
        include_once(resource_path() . '\views\movie.blade.php');
//        return view('theater');
    }
}
