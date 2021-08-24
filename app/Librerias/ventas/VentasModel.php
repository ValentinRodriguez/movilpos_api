<?php

namespace App\Librerias\ventas;

use Illuminate\Database\Eloquent\Model;

class VentasModel extends Model
{
    protected $connection = 'mov_ventas';
    protected $table='ventas';
}
