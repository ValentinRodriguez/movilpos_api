<?php

namespace App\Librerias\usuarios;
use Illuminate\Database\Eloquent\Model;

class bodegasUsuarios extends Model
{
    protected $connection = 'mov_usuarios';
    protected $table = 'bodegas_usuarios';
    protected $fillable = ['email','id_bodega','usuario_creador','estado'];
}