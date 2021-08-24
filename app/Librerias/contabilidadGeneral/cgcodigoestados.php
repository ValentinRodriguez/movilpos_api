<?php

namespace App\Librerias\contabilidadGeneral;

use Illuminate\Database\Eloquent\Model;

class cgcodigoestados extends Model
{
    protected $connection = 'mov_contabilidad';
    
    protected $fillable=['id_estado','descripcion_esp','descripcion_ing','estado','grupo','orden_grupo','tipo_estado',
    'signo', 'usuario_creador','usuario_modificador'];
}
