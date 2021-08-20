<?php

namespace App\Librerias\empresa;

use Illuminate\Database\Eloquent\Model;

class tipo_documento extends Model
{
    protected $connection = 'mov_empresa';
    protected $table='tipo_documento';
    protected $fillable =['tipo_documento','descripcion','estado','usuario_creador','usuario_modificador'];
}
