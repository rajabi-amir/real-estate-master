<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Ghasedak\GhasedakApi;

class SmsSender implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
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
