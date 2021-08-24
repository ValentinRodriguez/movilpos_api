<?php

namespace App\Librerias\globales;

use Illuminate\Database\Eloquent\Model;

class municipios extends Model
{
    protected $connection = 'mov_globales';
    protected $fillable = ["estado","id_municipio","id_region","descripcion"];
}
