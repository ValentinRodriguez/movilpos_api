<?php

namespace App\Librerias\cuentasXcobrar;

use Illuminate\Database\Eloquent\Model;

class cc_recibos_ingreso_master extends Model
{
    protected $connection = 'mov_cuentasxcobrar';
    protected $table='cc_recibos_ingreso_masters';
    protected $fillabel=['cuenta_no','cod_cia','tipo_doc','num_doc','tipo_cliente','sec_cliente',
    'cod_emp','cod_emp','cod_emp_sec','fecha_orig','fecha_ven','aplica_a','banco','num_cheque',
    'valor','valor_efectivo','valor_cheque','costo','monto_desc','status_t','usuario_creador',
    'usuario_modificador','bodega','factura_ext','tipo_doc_aplica','documento_ref','valor_targeta','sucid'];
}
