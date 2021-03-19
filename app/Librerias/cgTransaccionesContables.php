<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class cgTransaccionesContables extends Model
{
    protected $table='cg_transacciones_contables';
    protected $fillable=['fecha','tipo_doc','ref','cuenta_no','departamento','num_doc','cod_aux','cod_sec','cuenta_banco',
                         'detalle_1','detalle_2','debito','credito' ,'usuario_creador','usuario_modificador','estado'];
}
