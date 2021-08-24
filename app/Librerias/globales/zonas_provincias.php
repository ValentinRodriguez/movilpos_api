<?php

namespace App\Librerias\globales;

use Illuminate\Database\Eloquent\Model;

class zonas_provincias extends Model
{
    protected $connection = 'mov_globales';
    protected $fillable = ["id_zona","id_provincia"];
}
