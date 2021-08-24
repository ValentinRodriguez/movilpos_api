<?php

namespace App\Librerias\empresa;

use Illuminate\Database\Eloquent\Model;

class tipoMonedas extends Model
{
    protected $connection = 'mov_empresa';
    protected $fillable = ['divisa','simbolo','descripcion','usuario_creador','estado'];
}
