<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class tipoMonedas extends Model
{
    protected $fillable = ['divisa','simbolo','usuario_creador','estado'];
}
