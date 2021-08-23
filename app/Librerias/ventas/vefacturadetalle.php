<?php

namespace App\Librerias\ventas;

use Illuminate\Database\Eloquent\Model;

class vefacturadetalle extends Model
{
    protected $connection = 'mov_ventas';
    protected $table = 'vefacturasdetalle'; 
    protected $fillable = ['factura','codigo','porc_desc','descuento','porc_itbis','itbis','cantidad','cantidad1',	  
                           'precio','costo','valor','titulo','estado'];
}
