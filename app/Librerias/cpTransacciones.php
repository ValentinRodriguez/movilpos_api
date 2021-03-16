<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class cpTransacciones extends Model
{
    protected $fillable = ['fecha_orig', 'fecha_proc','valor','cond_pago','orden_no','monto_itbi','valor_orden','num_doc','porciento',
    'valor_recibido','tipo_doc','cod_sp','cod_sp_sec','moneda','bienes','servicios','retencion','detalle','ncf',
    'cod_cia','tipo_orden','aplica_a','cta_ctble','tipo_fact','codigo_fiscal','estado','usuario_creador'];
}
