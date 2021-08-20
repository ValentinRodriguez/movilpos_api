<?php

namespace App\Librerias\contabilidadGeneral;

use Illuminate\Database\Eloquent\Model;

class cgPeriodosFiscales extends Model
{
    protected $connection = 'mov_contabilidad';

    protected $fillable=['descripcion','anio','mes','fecha_inicio','fecha_corte','dias_habiles',
                         'dias_gracia' ,'usuario_creador','usuario_modificador','estado'];
}
