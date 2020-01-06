<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class forgotPasswordController extends Controller
{
    public function index(){
        include_once(resource_path().'\views\forgotPassword.blade.php');
    }
}
