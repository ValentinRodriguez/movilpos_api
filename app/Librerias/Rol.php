<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = ["email","usuario","perfil","modulos","programas","notificaciones","usuario_creador","estado","usuario_modificador"];
}
