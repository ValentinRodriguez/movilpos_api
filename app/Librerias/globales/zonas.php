<?php

namespace App\Librerias\globales;

use Illuminate\Database\Eloquent\Model;

class zonas extends Model
{
    protected $connection = 'mov_globales';
    protected $table = "zonas_local";

    protected $fillable = ["id_zonalocal","descripcion","estado"];
}
