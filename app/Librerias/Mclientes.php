<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class Mclientes extends Model
{
    protected $table = "veclientes";

    protected $fillable = ["tipo_cliente","sec_cliente","nombre","tipo_documento","vendedor","limite_credito","cond_pago",
                           "tipo_negocio","ncf","generico","direccion","urbanizacion","id_pais","id_zonalocal","id_ciudad","telefono_oficina",
                           "celular","telefono_casa","email","url","usuario_creador","documento","usuario_modificador","estado"];

    public function ScopeParametro($query, $parametro) { 
        if ($parametro) {
            return $query->where('nombre', 'LIKE', "%$parametro%")
                         ->orWhere('tipo_cliente', '=', "$parametro");
        }
    }

    public function ScopeRnc($query, $parametro) { 
        if ($parametro) {
            return $query->where('num_rnc', '=', "$parametro");                       
        }
    }

    public function ScopeVendedor($query, $parametro) { 
        if ($parametro) {
            return $query->where('vendedor', 'like', "%$parametro%");                       
        }
    }
}
