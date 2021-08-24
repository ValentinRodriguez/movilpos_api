<?php

namespace App\Librerias\inventario;
use Illuminate\Database\Eloquent\Model;

class requisicionesDetalle extends Model
{
    protected $connection = 'mov_inventario';
    protected $fillable = ['num_req','tipo_inv','codigo','cantidad','cod_sp','cod_sp_sec','precio','procesada','documento','estado'];
}
