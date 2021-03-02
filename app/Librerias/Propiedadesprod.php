<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class Propiedadesprod extends Model
{
    protected $table = "propiedades";
    protected $fillable = ['id_propiedad','descripcion','estado','usuario_creador','usuario_modificador'];
}
