<?php

namespace App\Librerias\inventario;
use Illuminate\Database\Eloquent\Model;

class Invtransaccdetallemodel extends Model
{
    protected $connection = 'mov_inventario';
    
    protected $table = 'invtransaccionesdetalle';

    protected $fillable = [	
        'num_doc','rowid','numerosecuencia','area','codigo','titulo_producto','unidadMed',
        'cantidad1','cantidad', 'precio','costo','margen','imagenPrincipal','id_tipomov',
        'id_bodega','estado'
    ];
}
