<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

class CallBackMail extends Mailable
{
    use Queueable, SerializesModels;

    public $RequestACallBack;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($RequestACallBack)
    {
        $this->RequestACallBack=$RequestACallBack;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Call Back Request')->view('emails.CallBackRequest', ['callbacks' => $this->RequestACallBack]);
    }
}
