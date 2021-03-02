<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class verecepcion_master extends Model
{
    protected $table = 'verecepcion_master';
    protected $fillable = ['num_oc','tipo_cliente','sec_cliente','recibe','entrega','fecha_entrega','estado','usuario_creador', 'usuario_modificador'];
}

