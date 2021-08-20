<?php

namespace App\Librerias\rrhh;

use Illuminate\Database\Eloquent\Model;

class turnos extends Model
{
    protected $connection = 'mov_rrhh';
    protected $fillable = ["descripcion","horario_inicial","horario_final","estado","usuario_creador","usuario_modificador"];
}
