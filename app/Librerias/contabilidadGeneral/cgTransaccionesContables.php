<?php

namespace App\Librerias\contabilidadGeneral;

use Illuminate\Database\Eloquent\Model;

class cgTransaccionesContables extends Model
{
    protected $connection = 'mov_contabilidad';

    protected $table='cg_transacciones_contables';
    protected $fillable=['fecha','tipo_doc','ref','cuenta_no','cuenta_nivel2','cuenta_nivel1','departamento','num_doc','cod_aux','cod_sec','cuenta_banco',
                         'detalle','debito','credito' ,'usuario_creador','usuario_modificador','estado'];

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
