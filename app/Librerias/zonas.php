<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class zonas extends Model
{
    protected $table = "zonas_local";

    protected $fillable = ["id_zonalocal","descripcion","estado"];
}
