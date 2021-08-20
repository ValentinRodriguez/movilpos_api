<?php

namespace App\Librerias\cuentasXpagar;

use Illuminate\Database\Eloquent\Model;

class cpTransaccionesDetalles extends Model
{
    protected $connection = 'mov_cuentasxpagar';
    protected $fillable = ['fecha','cod_sp','cod_sp_sec','factura','tipo_doc','cuenta_no','departamento','num_doc',        
                           'detalles','debito','credito','cod_cia','porciento','usuario_creador','estado',];

    public function ScopeCuenta($query, $parametro) {
        if ($parametro) {
            return $query->where('cp_transacciones_detalles.cuenta_no', '=', "$parametro");
        }
    }

    public function ScopefechaCreacion($query, $creacion_desde, $creacion_hasta) {        
        if ($creacion_desde && $creacion_hasta) {
            return $query->wherebetween('cp_transacciones_detalles.fecha', [$creacion_desde, $creacion_hasta]);
        }
    }
}
