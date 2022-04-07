<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class formVentas extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone;
    public $email;
    public $checkPubli;

    public function __construct($name, $phone, $email, $checkPubli)
    {
        $this->name=$name;
        $this->phone=$phone;
        $this->email=$email;
        $this->checkPubli=$checkPubli;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Solicitud Lead')->view('mails.leadMail');
    }
}
