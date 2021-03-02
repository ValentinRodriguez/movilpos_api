<?php

namespace App\Librerias;
use DateTime;
use Illuminate\Database\Eloquent\Model;

class Invtransaccdetallemodel extends Model
{
    protected $table = 'invtransaccionesdetalle';

    protected $fillable = [	
        'num_doc','rowid','numerosecuencia','area','codigo','titulo_producto','unidadMed',
        'cantidad1','cantidad', 'precio_venta','costo','margen','imagenPrincipal','id_tipomov',
        'id_bodega','estado'
    ];
}
