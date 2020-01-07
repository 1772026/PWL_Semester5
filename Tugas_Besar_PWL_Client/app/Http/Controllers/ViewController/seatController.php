<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Util\ApiService;
use Illuminate\Http\Request;

class seatController extends Controller
{
    public function index()
    {
        $id = filter_input(INPUT_GET, 'id');
        if (isset($id)) {
            $films = ApiService::get('film',$id);
//            $jadwal=array($films->jadwals );
            $studio = ApiService::get('studio', $id);
        }
        echo $jadwal;
        include_once(resource_path() . '\views\seat.blade.php');
//        return view('seat', ['studio' => $studio]);
    }
}
