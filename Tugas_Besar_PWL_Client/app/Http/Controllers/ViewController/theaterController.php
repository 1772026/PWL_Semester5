<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Util\ApiService;
use Illuminate\Http\Request;

class theaterController extends Controller
{
    public function index(){
        $location= ApiService::getAll('city');
        include_once(resource_path().'\views\theater.blade.php');
    }
}
