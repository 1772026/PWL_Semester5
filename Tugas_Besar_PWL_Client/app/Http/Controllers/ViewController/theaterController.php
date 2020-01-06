<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class theaterController extends Controller
{
    public function index(){
        include_once(resource_path().'\views\theater.blade.php');
    }
}
