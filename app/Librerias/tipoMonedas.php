<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class tipoMonedas extends Model
{
    protected $fillable = ['divisa','simbolo','descripcion','usuario_creador','estado'];
}
