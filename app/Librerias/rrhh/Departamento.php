<?php

namespace App\Librerias\rrhh;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $connection = 'mov_rrhh';
    protected $table='nodepartamentos';
    protected $fillable =['titulo','descripcion','estado','tipodepartamento','usuario_creador','usuario_modificador'];
}
