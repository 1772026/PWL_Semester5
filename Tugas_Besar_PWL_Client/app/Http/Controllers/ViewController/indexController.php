<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Util\ApiService;
use GuzzleHttp\Client;

class indexController extends Controller
{
    public function index()
    {
//        ApiService::add('city',array(
//            'id' => null,
//            'name' => "test"));
        include_once(resource_path().'\views\index.blade.php');
    }
}
