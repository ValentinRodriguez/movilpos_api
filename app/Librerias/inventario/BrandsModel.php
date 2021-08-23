<?php

namespace App\Librerias\inventario;
use Illuminate\Database\Eloquent\Model;

class BrandsModel extends Model
{
    protected $connection = 'mov_inventario';
    protected $table = 'brands';
    protected $fillable = ['id_brand', 'descripcion', 'usuario_creador', 'usuario_modificador','estado'];

    public function ScopeParametro($query, $parametro)
    {
        if ($parametro) {
            return $query->where('brands.descripcion', '=', "$parametro");
        }
    }
    public function ScopeCodigo($query, $parametro)
    {
        if ($parametro) {
            return $query->where('brands.id_brand', 'LIKE', "%$parametro%");
        }
    }
}
