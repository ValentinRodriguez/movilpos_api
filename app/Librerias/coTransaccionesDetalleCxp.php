<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class coTransaccionesDetalleCxp extends Model
{
    protected $table = 'co_transacciones_detalle_cxp';
    protected $fillable = ['fecha','cod_sp','cod_sp_sec','factura','tipo_doc','cuenta_no','departamento','num_doc',        
                           'detalles','debito','credito','cod_cia','porciento','usuario_creador','estado',];
}
