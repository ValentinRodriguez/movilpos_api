<?php

namespace App\Librerias\inventario;

use Illuminate\Database\Eloquent\Model;

class Bodegas extends Model
{
    protected $connection = 'mov_inventario';
    protected $table='bodegas';
    protected $fillable =['id_bodega','descripcion','estado','id_pais','id_ciudad','usuario_creador','usuario_modificador'];

    public function ScopeParametro($query, $parametro)
    { 

        if ($parametro) {
            return $query->where('bodegas.descripcion', 'LIKE', "%$parametro%")
                        ->orWhere('id_bodega', '=', "$parametro");
        }
    }

    public function ScopeExiste($query, $parametro)
    { 
    if ($parametro) {
        return $query->where('bodegas.descripcion', '=', "$parametro");
    }
    }

    public function ScopeCodigo($query, $parametro)
    {
        if ($parametro) {
            return $query->where('id_bodega', 'LIKE', "%$parametro%");
        }
    }
}
