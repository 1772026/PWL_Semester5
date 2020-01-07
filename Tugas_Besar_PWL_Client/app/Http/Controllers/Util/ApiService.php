<?php


namespace App\Http\Controllers\Util;


class ApiService
{
    public static function getAll($class)
    {
        return json_decode(ApiConnection::ApiConnect()->get($class)->getBody()->getContents());
    }

    public static function get($class, $id)
    {
        return json_decode(ApiConnection::ApiConnect()->get($class . "/" . $id)->getBody()->getContents());
    }

//    public static function add($class,array $data = array())
    public static function add($class, $data)
    {
        ApiConnection::ApiConnect()->post($class,
            array('form_params' => $data)
        );
    }

    public static function update($class, $data, $id)
    {
        ApiConnection::ApiConnect()->put($class . '/' . $id,
            array('form_params' => $data)
        );
    }

    public static function delete($class, $id)
    {
        ApiConnection::ApiConnect()->delete($class . '/' . $id);
    }

}
