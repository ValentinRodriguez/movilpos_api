<?php

namespace App\Librerias\ventas;

use Illuminate\Database\Eloquent\Model;

class tipoClientes extends Model
{
    protected $connection = 'mov_ventas';
    protected $table='tipos_clientes';
    protected $fillable =['tipo_cliente','descripcion','estado','usuario_creador','usuario_modificador'];

}
