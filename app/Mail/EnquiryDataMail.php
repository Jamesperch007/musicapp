<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquiryDataMail extends Mailable
{
    use Queueable, SerializesModels;
    public $EnquiryData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($EnquiryData)
    {
        $this->EnquiryData=$EnquiryData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('General Inquiry')->view('emails.Enquirymail', ['EnquiryData' => $this->EnquiryData]);
    }
}
