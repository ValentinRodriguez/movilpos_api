<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class transportistas extends Model
{
    protected $fillable = ["cedula","nombre","sec_transp","cod_transportista","calle","telefono",
                           "id_ciudad","id_pais","id_region","id_provincia","id_municipio","id_sector","estado",
                           "usuario_creador"];
}
