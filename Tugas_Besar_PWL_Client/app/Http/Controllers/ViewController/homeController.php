<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
//use App\Http\Controllers\Util\ApiService;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
//        ApiService::add('forget', array(
//            'email' => "sharnandy@gmail.com",
//            'name' => "Steven Rumanto"
//        ));
//        ApiService::add('city',array(
//            'id' => null,
//            'name' => "test"));
        include_once(resource_path().'\views\home.blade.php');
//        return view('index');
    }
}
