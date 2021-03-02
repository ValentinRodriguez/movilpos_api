<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table='nodepartamentos';
    protected $fillable =['titulo','descripcion','estado','tipodepartamento','usuario_creador','usuario_modificador'];
}
