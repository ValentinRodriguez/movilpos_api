<?php

namespace App\Librerias\usuarios;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $connection = 'mov_usuarios';
    protected $fillable = ["email","usuario","perfil","modulos","programas","notificaciones","usuario_creador","estado","usuario_modificador"];
}
