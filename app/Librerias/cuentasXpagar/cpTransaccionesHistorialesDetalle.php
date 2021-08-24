<?php

namespace App\Librerias\cuentasXpagar;

use Illuminate\Database\Eloquent\Model;

class cpTransaccionesHistorialesDetalle extends Model
{
    protected $connection = 'mov_cuentasxpagar';
    protected $fillable = ['fecha','cod_sp','cod_sp_sec','factura','tipo_doc','cuenta_no','departamento','num_doc',        
                           'detalles','debito','credito','cod_cia','porciento','usuario_creador','estado',];
}
