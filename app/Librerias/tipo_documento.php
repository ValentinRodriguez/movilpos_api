<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class tipo_documento extends Model
{
    protected $table='tipo_documento';
    protected $fillable =['tipo_documento','descripcion','estado','usuario_creador','usuario_modificador'];
}
