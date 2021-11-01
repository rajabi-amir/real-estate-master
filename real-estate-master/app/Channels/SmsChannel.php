<?php

namespace App\Channels;
use Illuminate\Notifications\Notification;
use Ghasedak\GhasedakApi;
class SmsChannel{
    public function send($notifible , Notification $notification){
     
        $api = new GhasedakApi('1cacb7e3f14afa58b81f4a16255d2ae516b518f9407a3012f17ffb6eb383d714');
        $api->Verify(
            "09162418808", 
            "1", 
            "signal", 
            "1256"
           
        );

    }
}

?>