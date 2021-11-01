<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Ghasedak\GhasedakApi;

class Smslistener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {    
        $api = new GhasedakApi('1cacb7e3f14afa58b81f4a16255d2ae516b518f9407a3012f17ffb6eb383d714');
        $api->Verify(
            "09162418808", 
            "1", 
            "signal", 
            "12333456"
           
        );
    }
}
