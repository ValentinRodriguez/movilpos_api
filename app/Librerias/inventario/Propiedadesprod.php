<?php

namespace App\Librerias\inventario;
use Illuminate\Database\Eloquent\Model;

class Propiedadesprod extends Model
{
    protected $connection = 'mov_inventario';
    protected $table = "propiedades";
    protected $fillable = ['id_propiedad','descripcion','estado','usuario_creador','usuario_modificador'];
}
