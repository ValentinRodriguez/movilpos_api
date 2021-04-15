<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class cgTransaccionesContables extends Model
{
    protected $table='cg_transacciones_contables';
    protected $fillable=['fecha','tipo_doc','ref','cuenta_no','departamento','num_doc','cod_aux','cod_sec','cuenta_banco',
                         'detalle_1','detalle_2','debito','credito' ,'usuario_creador','usuario_modificador','estado'];

    public function ScopeCuenta($query, $parametro) {
        if ($parametro) {
            return $query->where('cg_transacciones_contables.cuenta_no', '=', "$parametro");
        }
    }

    public function ScopefechaCreacion($query, $creacion_desde, $creacion_hasta) {        
        if ($creacion_desde && $creacion_hasta) {
            return $query->wherebetween('cg_transacciones_contables.fecha', [$creacion_desde, $creacion_hasta]);
        }
    }

}
