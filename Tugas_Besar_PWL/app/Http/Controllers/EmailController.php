<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function forgetPassword(Request $request)
    {

        $to_name = "Unknown";
        $to_email = "sharnandy@gmail.com";
        $data = array(
//            'name' => "$request->name",
            'name' => "TEST",
            'body' => "ISI");
        Mail::send('emails.mailResetPassword', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Forget Password');
            $message->from("cinemafanonce@gmail.com", "Test Mail");
        });
        echo "Email Send";
    }

    public function generateTicket(Request $request)
    {
        $to_name = "Unknown";
        $to_email = "nelzakrz@gmail.com";
        $data = array(
//            'name' => "$request->name",
            'name' => "TEST",
            'body' => "ISI");
        Mail::send('emails.mailGenerateTicket', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Ticket Cinema Fan ONCE');
            $message->from("cinemafanonce@gmail.com", "Test Mail");
        });
        echo "Email Send";
    }

}
