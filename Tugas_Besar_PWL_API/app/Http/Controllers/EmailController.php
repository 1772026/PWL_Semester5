<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function forgetPassword(Request $request)
    {

        $to_name = "Unknown";
        $to_email = $request->email;
        $data = array(
            'name' => $request->name,
            );
        Mail::send('emails.mailResetPassword', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Forget Password');
            $message->from("cinemafanonce@gmail.com", "Test Mail");
        });
        return response()->json(["Request Send, Check your Email!"], 200);
    }

    public function generateTicket(Request $request)
    {
        $to_name = "Unknown";
        $to_email = $request->email;
        $data = array(
            'email' => $request->email,
            'film' => $request->film,
            'date' => $request->date,
            'no' => $request->no,
            'location' =>  $request->location,
            'time' => $request->time,
            'name' => $request->name,
            );
        Mail::send('emails.mailGenerateTicket', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Ticket Cinema Fan ONCE');
            $message->from("cinemafanonce@gmail.com", "Test Mail");
        });
        return response()->json(["Ticket Send, Check your Email!"], 200);
    }

}
