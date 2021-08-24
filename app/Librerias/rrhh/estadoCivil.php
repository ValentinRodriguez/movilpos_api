<?php

namespace App\Librerias\rrhh;

use Illuminate\Database\Eloquent\Model;

class estadoCivil extends Model
{
    protected $connection = 'mov_rrhh';
    protected $table = 'estado_civil';
}
