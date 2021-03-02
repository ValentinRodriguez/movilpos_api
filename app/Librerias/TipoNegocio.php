<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class TipoNegocio extends Model
{
    protected $table='tipo_negocio';
    protected $fillable =['tipo_negocio','descripcion','estado','usuario_creador','usuario_modificador'];

    
    public function ScopeDescripcion($query, $parametro)
    { 

        if ($parametro) {
            return $query->where('tipo_negocio.descripcion', '=', "$parametro");
        }
    }
}
