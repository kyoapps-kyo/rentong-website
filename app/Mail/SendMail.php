<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $info;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        //
        $this->info = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('web@rentong.co.jp','RENTONG HOME PAGE')
                    ->view('mail');
    }
}
