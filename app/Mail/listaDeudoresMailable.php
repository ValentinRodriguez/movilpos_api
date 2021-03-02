<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class listaDeudoresMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Lista de clientes que deben pagar este mes";
    public $data;
    
    public function __construct($data)
    {
        $this->data = $data;
    }
    
    public function build()
    {
        return $this->view('emails.deudores');
    }
}
