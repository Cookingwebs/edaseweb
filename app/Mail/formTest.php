<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class formTest extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone;
    public $email;
    public $canal;
    public $url;

    public function __construct($name, $phone, $email, $canal, $url)
    {
        $this->name=$name;
        $this->phone=$phone;
        $this->email=$email;
        $this->canal=$canal;
        $this->url=$url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Solicitud Programa Empresarial - '.$this->canal)->view('mails.leadTest');
    }
}
