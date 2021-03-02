<?php

namespace App\Librerias;
use Illuminate\Database\Eloquent\Model;

class bodegasUsuarios extends Model
{
    protected $table = 'bodegas_usuarios';
    protected $fillable = ['email','id_bodega','usuario_creador','estado'];
}