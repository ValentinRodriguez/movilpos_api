<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class verecepcion_detalle extends Model
{
    protected $table = 'verecepcion_detalles';
    protected $fillable = ['num_oc','id_inspeccion','respuesta'];
}
