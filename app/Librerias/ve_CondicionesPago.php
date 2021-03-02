<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class ve_CondicionesPago extends Model
{
    protected $table='ve_cond_pagos';
    protected $fillable =['cond_pago','descripcion','estado','defecto','dias','usuario_creador','usuario_modificador'];

}
