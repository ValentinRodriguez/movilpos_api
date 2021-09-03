<?php

namespace App\Librerias\inventario;
use Illuminate\Database\Eloquent\Model;

class invProductoStore extends Model
{
    protected $connection = 'mov_tienda';

    protected $fillable = ["cantidadLim","categoria","descripcion","documentosDigitales",
                            "fechaLimDescarga","fecha_rebaja","limDescargas","precio","precio_rebajado","stock","tipo",    
                            "titulo"];
}
