<?php

namespace App\Librerias\compras;

use Illuminate\Database\Eloquent\Model;

class coTipoOrden extends Model
{
    protected $connection = 'mov_compras';
    protected $table = 'co_tipo_ordenes';
}
