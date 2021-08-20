<?php

namespace App\Librerias\inventario;
use Illuminate\Database\Eloquent\Model;

class transportistas extends Model
{
    protected $connection = 'mov_inventario';
    protected $fillable = ["cedula","nombre","sec_transp","cod_transportista","calle","telefono",
                           "id_ciudad","id_pais","id_region","id_provincia","id_municipio","id_sector","estado",
                           "usuario_creador"];
}
