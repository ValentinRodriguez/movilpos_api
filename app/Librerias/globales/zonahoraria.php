<?php

namespace App\Librerias\globales;

use Illuminate\Database\Eloquent\Model;

class zonahoraria extends Model
{
    protected $connection = 'mov_globales';
    protected $table = "zonas_horaria";
    protected $fillable = ["id_zonahoraria","detalle_zona","parametro_zona"];
}
