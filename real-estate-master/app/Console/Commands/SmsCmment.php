<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Ghasedak\GhasedakApi;

class SmsCmment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
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
