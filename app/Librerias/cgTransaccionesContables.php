<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class cgTransaccionesContables extends Model
{
    protected $table='cg_transacciones_contables';
    protected $fillable=['fecha','tipo','ref','cuenta_no','departamento','num_doc','cod_aux','cod_sec','detalles',
                         'detalle_1','detalle_2','debito','credito' ,'usuario_creador','usuario_modificador','estado'];
}
