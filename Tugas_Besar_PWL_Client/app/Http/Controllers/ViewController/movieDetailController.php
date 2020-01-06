<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class movieDetailController extends Controller
{
    public function index(){
        return view('theater');
    }
}
