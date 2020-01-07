<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Util\ApiService;
use GuzzleHttp\Client;

class indexController extends Controller
{
    public function valid()
    {
        $username = filter_input(INPUT_POST, "username");
        $password = filter_input(INPUT_POST, "password");
        $roles = ApiService::getAll('role');
        $data=null;
        foreach ($roles as $role) {
            foreach ($role->users as $user) {
                if ($username === $user->username && $password === $user->password) {
                    $data = $role;
                    break;
                }
            }

        }
//
        if($data != null){
            $_SESSION['role']=$role->name;
        }
        include_once(resource_path() . '\views\index.blade.php');
    }

    public function index()
    {
//        ApiService::add('city',array(
//            'id' => null,
//            'name' => "test"));
//        $loginPressed = filter_input(INPUT_POST, 'btnLogin');
//        if (isset($loginPressed)) {
////            $username = filter_input(INPUT_POST, "username");
////            $password = filter_input(INPUT_POST, "password");
////
//            $user=ApiService::login('userPOST');
//            $user = Utility::curl_post("http://localhost/PWLP08_API/Service/loginService.php", array('txtUsername' => $username, 'txtPassword' => $password));
//            $user = json_decode($user);
//            if ($user != null && $user->username == $usnm) {
//                $_SESSION['user_logged'] = true;
//                $_SESSION['name'] = $user->name;
//                $_SESSION['username'] = $user->username;
//                $_SESSION['role'] = $user->role->name;
//                header("location:index.php");
//            } else {
//                $errMsg = "Invalid username or passwword";
//                echo $errMsg;
//            }
//            echo $user;
//        }
        include_once(resource_path() . '\views\index.blade.php');
    }
}
