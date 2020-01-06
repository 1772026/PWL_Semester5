<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function index(){
        return view('test');
    }
}
