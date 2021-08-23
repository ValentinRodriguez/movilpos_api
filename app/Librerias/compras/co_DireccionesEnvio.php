<?php

namespace App\Librerias\compras;

use Illuminate\Database\Eloquent\Model;

class co_DireccionesEnvio extends Model
{
    protected $connection = 'mov_compras';

    protected $table = 'co_direcciones_envios';
    protected $fillable = ['nombre','direccion_a','direccion_b','id_pais','id_ciudad','telefono','estado','usuario_creador',
                           'usuario_modificador'];
}
