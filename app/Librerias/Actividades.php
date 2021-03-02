<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    protected $fillable =['title','start','end','notificacion','username','enviado','estado','usuario_modificador'];
}
