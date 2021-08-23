<?php

namespace App\Librerias\contabilidadGeneral;

use Illuminate\Database\Eloquent\Model;

class cgEntradasDiarioMaster extends Model
{
    protected $connection = 'mov_contabilidad';

    protected $table='cg_entradas_diario_masters';
    protected $fillable=['fecha','documento','mes','periodo','ref','detalle','tipo_doc','valor',
                         'cod_sp','cod_sp_sec','nombre_sup','tasa','cuenta_no','estado','usuario_creador','usuario_modificador'];

}
