<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class alarm extends Mailable
{
    use Queueable, SerializesModels;
public $test;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->text('testview.mail')
        ->to($this->test)
        ->replyTo('info@pirsoukha.ir')
        ->subject('جدید');
    
        
    }
}
