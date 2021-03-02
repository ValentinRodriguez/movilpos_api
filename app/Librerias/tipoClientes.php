<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class tipoClientes extends Model
{
    protected $table='tipos_clientes';
    protected $fillable =['tipo_cliente','descripcion','estado','usuario_creador','usuario_modificador'];

}
