<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $client = new Client([
            'connect_timeout' => false,
            'timeout' => 10.0,
            'base_uri' => 'http://localhost:8888',
            'defaults' => [
                'exceptions' => false
            ]
        ]);

//        $response = $client->get('/api/role');
//        $response = $client->get('/api/role/2');
//        $response = $client->get('/api/ticket');
//        $result = $response->getBody()->getContents();
//        echo $result;

//        $role = role::all();
//        return view('role', ['role' => $role]);
    }
}
