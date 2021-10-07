<?php

namespace App\Librerias\miscelaneos;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    protected $connection = 'mov_miscelaneos';
    protected $fillable =['title','start','end','notificacion','username','enviado','estado','usuario_modificador'];
}
