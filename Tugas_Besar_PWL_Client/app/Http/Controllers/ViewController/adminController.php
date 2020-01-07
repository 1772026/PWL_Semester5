<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Util\ApiService;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        $movie=ApiService::getAll('genre');
        $studio=ApiService::getAll('studio');
        include_once(resource_path().'\views\admin.blade.php');
//        return view('theater');
    }
}
