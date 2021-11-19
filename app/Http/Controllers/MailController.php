<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail() {
        $details = [
            'title'=> 'Mail from Surfside Media',
            'body'=>'This is for testing mail using gmail'
        ];
        Mail::to('mulemanowa@gmail.com')->send(new SendMail($details));

        return "Email Sent";
    }
}