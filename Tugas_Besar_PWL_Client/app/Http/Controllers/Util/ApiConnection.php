<?php


namespace App\Http\Controllers\Util;


use GuzzleHttp\Client;

class ApiConnection
{
    public static function ApiConnect()
    {
        $client = new Client([
            'connect_timeout' => false,
            'timeout' => 10.0,
            'base_uri' => 'http://localhost:8888/api/',
            'defaults' => [
                'exceptions' => false
            ]
        ]);
        return $client;
    }

}

