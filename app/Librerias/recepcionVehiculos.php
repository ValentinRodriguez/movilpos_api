<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class recepcionVehiculos extends Model
{
    protected $fillable =['cliente','recibido','entregado','fecha_entrega','fabricacion','id_brand','id_categoria','kilometraje','placa','chasis','imagen','tipo_producto',
                        'id_propiedad','estado','inspecciones','carroceria','archivos','usuario_creador','usuario_modificador'];
}
