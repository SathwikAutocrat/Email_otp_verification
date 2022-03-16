<?php

namespace App\Http\Controllers;

use App\Mail\sendemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mails extends Controller
{
    public function sendmail(){
        Mail::to('sathwik.m@mpokket.com')->send(new sendemail());
    }
}
