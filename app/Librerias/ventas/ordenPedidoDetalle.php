<?php

namespace App\Librerias\ventas;

use Illuminate\Database\Eloquent\Model;

class ordenPedidoDetalle extends Model
{
    protected $connection = 'mov_ventas';
    protected $fillable =['num_oc','secuencia','area','codigo','precio','cantidad','descuento','costo','total_bruto','itbis',
                          'sub_total','neto','fecha_compromiso','estado_produccion','observacion','id_kit','departamento','estado'];
    
}
