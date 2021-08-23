<?php

namespace App\Librerias\compras;
use Illuminate\Database\Eloquent\Model;

class coOrdenesDetalle extends Model
{
    protected $connection = 'mov_compras';
    protected $table ='co_ordenes_detalles';
    protected $fillable =["id","num_oc","num_req","codigo","cantidad","precio","porc_desc",
        "monto_desc","itbis","valor_bruto","valor_neto","estado"];
}
