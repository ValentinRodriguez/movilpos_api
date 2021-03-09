<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class cgEntradasDiarioMaster extends Model
{
    protected $table='cg_entradas_diario_masters';
    protected $fillable=["fecha","numero_entrada","secuencia_entrada","mes","periodo","ref","detalle",
                        "informacion","cod_sp","fecha_inicial","fecha_final","cuenta_no","estado","usuario_creador",
                         "usuario_modificador"];

}
