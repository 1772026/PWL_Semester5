<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class signUpController extends Controller
{
    public function index(){
        include_once(resource_path().'\views\signUp.blade.php');
    }
}
