<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class coCuentas_cxp extends Model
{
    protected $fillable = ["descripcion","cod_sp","cod_sp_sec","cuenta_no","porciento","estado"];
}
