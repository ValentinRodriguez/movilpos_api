<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class permisosEmpresa extends Model
{
    protected $fillable = ['descripcion','valor','usuario_creador','usuario_modificador'];
}
