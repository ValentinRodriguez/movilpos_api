<?php

namespace App\Librerias\contabilidadGeneral;

use Illuminate\Database\Eloquent\Model;

class cgcatalogo extends Model
{
    protected $connection = 'mov_contabilidad';

    protected $table='cgcatalogo';
    
    protected $fillable=['cuenta_no','descripcion','origen','nivel','referencia','catalogo', 'depto','codigo_estado','analitico',
                         'aplica_a','cuenta_resultado','tipo_cuenta','selectivo_consumo','codigo_isr','retencion','usuario_creador',
                         'usuario_modificador','estado_resultado','cgcatalogo.estado','estado_a','estado_m','estado_bg','grupo'];

    public function ScopeParametro($query, $parametro) {
        if ($parametro) {
            return $query->where('cgcatalogo.descripcion', 'LIKE', "%$parametro%");
        }
    }

    public function ScopeCuenta($query, $parametro) {
        if ($parametro) {
            return $query->where('cgcatalogo.cuenta_no', 'LIKE', "%$parametro%");
        }
    }
}
