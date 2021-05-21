<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class municipios extends Model
{
    protected $fillable = ["estado","id_municipio","id_region","descripcion"];
}
