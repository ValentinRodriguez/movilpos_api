<?php

namespace App\Librerias\ventas;

use Illuminate\Database\Eloquent\Model;

class verecepcion_master extends Model
{
    protected $connection = 'mov_ventas';
    protected $table = 'verecepcion_master';
    protected $fillable = ['num_oc','tipo_cliente','sec_cliente','recibe','entrega','fecha_entrega','estado','usuario_creador', 'usuario_modificador'];
}

