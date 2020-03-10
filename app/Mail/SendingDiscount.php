<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendingDiscount extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Laila Frank Shoes';

    public $datos;

    public $discount;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos, $discount)
    {
        $this->datos = $datos;
        $this->discount = $discount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.sendingdiscount');
    }
}
