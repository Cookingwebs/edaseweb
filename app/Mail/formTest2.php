<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class formTest2 extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone;
    public $email;

    public function __construct($name, $phone, $email)
    {
        $this->name=$name;
        $this->phone=$phone;
        $this->email=$email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Solicitud Programa Empresarial')->view('mails.leadTest2');
    }
}
