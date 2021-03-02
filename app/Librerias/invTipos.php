<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class invTipos extends Model
{
    protected $table = 'invtipos_inventarios';
    protected $fillable = ['id_tipoinventario','descripcion','usuario_creador','usuario_modificador','cuenta_no','estado'];

    public function ScopeParametro($query, $parametro)
    {
        if ($parametro) {
            return $query->where('invtipos_inventarios.descripcion', '=', "$parametro");
        }
    }

    public function ScopeCuenta($query, $parametro)
    {
        if ($parametro) {
            return $query->where([['cuenta_no', 'LIKE', "%$parametro%"],['estado','=','activo']]);
        }
    }

    public function ScopeCodigo($query, $parametro)
    {
        if ($parametro) {
            return $query->where('id_tipoinventario', 'LIKE', "%$parametro%");
        }
    }
}