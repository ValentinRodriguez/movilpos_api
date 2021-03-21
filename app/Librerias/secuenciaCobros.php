<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class secuenciaCobros extends Model
{
    protected $table = 'secuencia_cobros';
    protected $fillable = ['documento','secuencia','usuario_creador','usuario_modificador'];
}
