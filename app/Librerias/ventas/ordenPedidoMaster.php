<?php

namespace App\Librerias\ventas;

use Illuminate\Database\Eloquent\Model;

class ordenPedidoMaster extends Model
{
    protected $connection = 'mov_ventas';
    protected $fillable =['num_oc','ventas','cotizacion_no','fecha_orden','sec_vend','tipo_cliente','sec_cliente','direccion',	
    'telefono',	'fax','fecha_entrega','cond_pago','total_bruto','sub_total','monto_desc','neto','itbis','ubicacion','cerrada','fecha_cierre',	
    'id_pais','id_ciudad','id_zonalocal','nombre_cliente','direccion_cliente','urbanizacion_cliente','observacion',
    'tipo_orden','estado_despacho','id_ultima_bodega','estado_devolucion','orden_sustituta','estado','usuario_creador','usuario_modificador'];
}