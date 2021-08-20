<?php

namespace App\Librerias\cuentasXcobrar;

use Illuminate\Database\Eloquent\Model;

class secuenciaCobros extends Model
{
    protected $connection = 'mov_cuentasxcobrar';
    protected $table = 'secuencia_cobros';
    protected $fillable = ['documento','secuencia','usuario_creador','usuario_modificador'];
}
