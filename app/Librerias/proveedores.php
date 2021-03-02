<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    protected $table='proveedores';

    protected $fillable=["cod_sp","cod_sp_sec","nom_sp","dir_sp","id_ciudad","id_pais","tel_sp","documento",
                         "fax_sp","cont_sp","cond_pago","rnc","tipo_doc","email","cuenta_no","moneda",
                         "estado","usuario_creador","usuario_modificador","created_at"];

    public function ScopeTitulo($query, $parametro)
    {
        if ($parametro) {
            return $query->where('nom_sp', '=', "$parametro");
        }
    }

    public function ScopeParametro($query, $parametro) {                 
        if ($parametro) {
            return $query->where('nom_sp', 'LIKE', "%$parametro%");                
        }
    }

    public function ScopePais($query, $parametro) {                        
        if ($parametro) {
            return $query->where('id_pais', 'LIKE', "%$parametro%");                
        }
    }
}
