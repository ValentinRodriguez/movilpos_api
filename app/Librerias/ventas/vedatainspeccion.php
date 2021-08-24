<?php

namespace App\Librerias\ventas;

use Illuminate\Database\Eloquent\Model;

class vedatainspeccion extends Model
{
    protected $connection = 'mov_ventas';
    protected $table = 'vedatainspecciones';
    protected $fillable = ['id','descripcion','tipo_negocio','usuario_creador','usuario_modificador','estado'];
}
