<?php

namespace App\Librerias\usuarios;

use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    protected $connection = 'mov_usuarios';

    protected $fillable = ["perfil"];
}
