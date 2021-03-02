<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class coOrdenesMaster extends Model
{
    protected $table = 'co_ordenes_masters';
    protected $fillable =["id","num_oc","fecha","numero_proforma","cod_sp","cod_sp_sec","cond_pago",
                          "via_envio","fecha_enviada","fecha_pagada","pagada","nombre","id_pais","id_ciudad",
                          "orden_cerrada","id_moneda","id_puerto","total_bruto","total_desc","archivo",
                          "total_itbis","total_neto","observaciones","estado","notas","usuario_creador",
                          "direccion_a","direccion_b","telefono","usuario_modificador"];

                       public function ScopeNum_oc($query, $num_oc) {                 
                        if ($num_oc) {
                            return $query->where('co_ordenes_masters.num_oc', '=', "$num_oc");                
                        }
                    }
}
