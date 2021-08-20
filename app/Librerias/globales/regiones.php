<?php

namespace App\Librerias\globales;

use Illuminate\Database\Eloquent\Model;

class regiones extends Model
{
    protected $connection = 'mov_globales';
    protected $fillable = ["estado","id_region","descripcion"];

}
