<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class Nopuesto extends Model
{
    protected $table = 'nopuestos';
    protected $fillable = ['id_puesto','titulo','descripcion','sueldo_inicial','sueldo_actual',
                           'usuario_creador','usuario_modificador','estado'];

}
