<?php

namespace App\Librerias\ventas;

use Illuminate\Database\Eloquent\Model;

class verecepcion_detalle extends Model
{
    protected $connection = 'mov_ventas';
    protected $table = 'verecepcion_detalles';
    protected $fillable = ['num_oc','id_inspeccion','respuesta'];
}
