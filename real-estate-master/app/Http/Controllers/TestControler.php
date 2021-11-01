<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\alarm;
use App\Events\Smsevent;
use App\Jobs\Emailjob;
use Illuminate\Http\Request;
use App\Notifications\publish;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Notification;

use App\Jobs\SmsSender;



class TestControler extends Controller
{
    function test2(){

      
        Emailjob::dispatch();
        echo "send sms";

// event(new Smsevent());


    // $m="hoseinghsghs@yahoo.com";
    // Mail::send( new alarm($m));
    // return "send mail";
   }


    function test3(){
        Notification::route('mail', 'hoseinghsghs@gmail.com')
        ->notify(new publish());
}
}