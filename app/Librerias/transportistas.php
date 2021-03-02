<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class transportistas extends Model
{
    protected $fillable = ["cedula","nombre","sec_transp","cod_transportista","calle","casa_num","barrio","urbanizacion","cod_zona",         
                           "cod_provincia","telefono","id_pais","estado","usuario_creador"];
}
