<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class CategoriasModel extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['id_categoria','descripcion','estado','usuario_creador','usuario_modificador'];

    public function ScopeParametro($query, $parametro)
    {
        if ($parametro) {
            return $query->where('categorias.descripcion', '=', "$parametro");
        }
    }

    public function ScopeCodigo($query, $parametro)
    {
        if ($parametro) {
            return $query->where('id_categoria', 'LIKE', "%$parametro%");
        }
    }
}
