<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//use Mail;

class MailController extends Controller
{
    public function sendEmail(){
        $details = [
         ['title' => 'My Mail'],
            ['body' => 'This is testing.']

        ];

        Mail::to("derrickmbugua50@gmail.com")->send(new TestMail($details));
        return "Email Sent";
    }
    public function index(){
        $data=['name'=>"Derro",'data'=>"Niaje mse"];
        Mail::send('emails.TestMail', $data, function ($message) {
            $message->to('derrickmbugua50@gmail.com');
            $message->subject('Hello Dev');

        });
    }
}
