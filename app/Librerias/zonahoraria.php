<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class zonahoraria extends Model
{
    protected $table = "zonas_horaria";
    protected $fillable = ["id_zonahoraria","detalle_zona","parametro_zona"];
}
