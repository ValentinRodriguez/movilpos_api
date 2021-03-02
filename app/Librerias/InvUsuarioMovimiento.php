<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class InvUsuarioMovimiento extends Model
{
    protected $table  ='invusuariosmovimientos';
    protected $fillable =['id_tipomov','email','usuario_creador','estado'];

    public function ScopeParametro($query, $parametro)
    { 
        if ($parametro) {
            return $query->where('invusuariosmovimientos.email', 'LIKE', "%$parametro%");
        }
    }

    public function ScopeTipo($query, $parametro)
    { 
        if ($parametro) {
            return $query->where('invusuariosmovimientos.id_tipomov', 'LIKE', "%$parametro%");
        }
    }
}
