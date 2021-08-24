<?php

namespace App\Librerias\cuentasXcobrar;

use Illuminate\Database\Eloquent\Model;

class cc_recibos_ingreso_detalle extends Model
{
    protected $connection = 'mov_cuentasxcobrar';

    protected $table = 'cc_recibos_ingreso_detalles';
    protected $fillable=['idavance','aplica_a','num_doc','tipo_doc','descuento','valor_pagado','sucid'];

}
