<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Util\ApiService;
use Illuminate\Http\Request;

class studioController extends Controller
{
    public function index()
    {
        $data = array();
        $studios = ApiService::getAll('studio');
        foreach ($studios as $studio) {
            foreach ($studio->jadwals as $jadwal) {
                if ($jadwal->date_end > date("Y-m-d")) {
                    array_push($data, $studio);
                    break;
                }
            }
        }
        include_once(resource_path() . '\views\studio.blade.php');
    }
}
