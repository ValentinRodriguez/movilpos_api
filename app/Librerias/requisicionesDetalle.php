<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class requisicionesDetalle extends Model
{
    protected $fillable = ['num_req','tipo_inv','codigo','cantidad','cod_sp','cod_sp_sec','precio','procesada','documento','estado'];
}
