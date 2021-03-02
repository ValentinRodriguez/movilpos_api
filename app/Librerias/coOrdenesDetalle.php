<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class coOrdenesDetalle extends Model
{
    protected $table ='co_ordenes_detalles';
    protected $fillable =["id","num_oc","num_req","codigo","cantidad","precio","porc_desc",
        "monto_desc","itbis","valor_bruto","valor_neto","estado"];
}
