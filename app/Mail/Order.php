<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Order extends Mailable
{
    use Queueable, SerializesModels;

    public $items;
    public $phone;
    public $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($phone, $name)
    {
        $this->items = \Cart::all();
        $this->phone = $phone;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Order from '.$this->phone)
                    ->view('emails.order');
    }
}
