<?php

namespace App\Librerias\empresa;

use Illuminate\Database\Eloquent\Model;

class sucursales extends Model
{
    protected $connection = 'mov_empresa';
    protected $fillable = ["cod_cia","descripcion","direccion","id_pais","id_zonalocal","id_ciudad" ,     
                           "id_region","id_municipio","id_provincia","id_sector","estado","usuario_creador"];
}
