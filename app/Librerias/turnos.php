<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class turnos extends Model
{
    protected $fillable = ["descripcion","estado","usuario_creador","usuario_modificador"];
}
