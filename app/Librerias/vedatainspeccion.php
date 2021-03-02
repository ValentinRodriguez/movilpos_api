<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class vedatainspeccion extends Model
{
    protected $table = 'vedatainspecciones';
    protected $fillable = ['id','descripcion','tipo_negocio','usuario_creador','usuario_modificador','estado'];
}
