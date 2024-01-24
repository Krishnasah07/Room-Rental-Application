<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReserveMail extends Mailable
{
    use Queueable, SerializesModels;

    public $orderNo;
    public $product;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orderNo,$product)
    {
        $this->orderNo = $orderNo;
        $this->product = $product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       $data = [
           'orderNo' => $this->orderNo,
           'product' => $this->product
       ];
        return $this->view('Reservemail.ReserveEmail',$data)->subject('Room reserve details from Roomie');
    }
}
