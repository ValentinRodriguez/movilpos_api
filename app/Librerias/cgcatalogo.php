<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class cgcatalogo extends Model
{
    protected $table='cgcatalogo';
    protected $fillable=['cuenta_no','descripcion','origen','nivel','referencia','catalogo', 'depto','codigo_estado','analitico',
                         'aplica_a','cuenta_resultado','tipo_cuenta','selectivo_consumo','codigo_isr','retencion','usuario_creador',
                         'usuario_modificador','estado','estado_a','estado_m','grupo'];
    
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
