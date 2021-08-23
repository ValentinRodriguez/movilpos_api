<?php

namespace App\Librerias\globales;

use Illuminate\Database\Eloquent\Model;

class provincias extends Model
{
    protected $connection = 'mov_globales';
    protected $fillable = ["estado","id_provincia","descripcion"];
}
