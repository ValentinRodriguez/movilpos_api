<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class ciudad extends Model
{
    protected $table = "ciudades";
    protected $fillable = ["id_ciudad","descripcion","id_pais"];

}
