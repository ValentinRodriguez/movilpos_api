<?php

namespace App\Librerias\tienda;
use Illuminate\Database\Eloquent\Model;

class invProductoStore extends Model
{
    protected $connection = 'mov_tienda';

    protected $fillable = ["cantidadLim","categoria","descripcion","documentosDigitales","tienda",
                            "fechaLimDescarga","fecha_rebaja","limDescargas","precio","precio_rebajado","stock","tipo",    
                            "titulo","codigo","atributos","galeriaImagenes","rating","composicion","estado"];
}
