<?php

namespace App\Librerias\empresa;

use Illuminate\Database\Eloquent\Model;

class permisosEmpresa extends Model
{
    protected $connection = 'mov_empresa';
    protected $fillable = ['descripcion','valor','usuario_creador','usuario_modificador'];
}
