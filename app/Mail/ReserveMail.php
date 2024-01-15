<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReserveMail extends Mailable
{
    use Queueable, SerializesModels;

    private $Reserve;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Reserve)
    {
        $this->Reserve = $Reserve;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->reserve;
        return $this->view('Reservemail.ReserveEmail')->subject('Room reserve details from Roomie ');
    }
}
