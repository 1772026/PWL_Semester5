<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
//        ApiService::add('city',array(
//            'id' => null,
//            'name' => "test"));
        include_once(resource_path().'\views\home.blade.php');
//        return view('index');
    }
}
