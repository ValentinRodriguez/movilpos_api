<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class actividadesMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Recordatorio de actividad";
    public $data;
    
    public function __construct($data)
    {
        $this->data = $data;
    }
    
    public function build()
    {
        return $this->view('emails.actividades');
    }
}
