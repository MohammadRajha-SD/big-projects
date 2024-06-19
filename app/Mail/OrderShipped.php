<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Constructor logic, if any
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->to('mohmmad84056@gmail.com')
            ->subject('Order Shipped')
            ->view('emails.order-shipped')
            ->attach(public_path('/storage/uploads/1705368420_0bcda188f76c3b0de66e8f1bb1554bdf.jpg'));
    }
}
