<?php

namespace App\Librerias\contabilidadGeneral;

use Illuminate\Database\Eloquent\Model;

class secuencias extends Model
{
    protected $connection = 'mov_contabilidad';

    protected $fillable = ['documento','cuenta_no','estado','usuario_creador','tipo_doc'];
}
