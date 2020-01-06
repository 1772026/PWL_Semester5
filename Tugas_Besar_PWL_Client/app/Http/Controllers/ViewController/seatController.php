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
            $studio = json_decode(ApiService::get('studio', $id));
        }
//        $submitted = filter_input(INPUT_POST, 'btnSubmit');
//        if (isset($submitted)) {
//            $name = filter_input(INPUT_POST, 'txtName');
//            Utility::curl_post("http://localhost/PWLP08_API/Service/updateInsuranceService.php", array('id' => $id, 'txtName' => $name));
//            header("Location: index.php?menu=in");
//        }
        return view('seat', ['studio' => $studio]);
    }
}
