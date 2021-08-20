<?php

namespace App\Librerias\globales;

use Illuminate\Database\Eloquent\Model;

class ciudad extends Model
{
    protected $connection = 'mov_globales';
    protected $table = "ciudades";
    protected $fillable = ["id_ciudad","descripcion","id_pais"];

}
