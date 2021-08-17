<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class cgcodigoestados extends Model
{
    //
    protected $fillable=['id_estado','descripcion_esp','descripcion_ing','estado','grupo','orden_grupo','tipo_estado',
    'signo', 'usuario_creador','usuario_modificador'];
}
