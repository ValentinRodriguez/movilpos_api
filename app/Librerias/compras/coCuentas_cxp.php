<?php

namespace App\Librerias\compras;
use Illuminate\Database\Eloquent\Model;

class coCuentas_cxp extends Model
{
    protected $connection = 'mov_compras';
    protected $table = 'co_cuentas_cxp';
    protected $fillable = ["descripcion","cod_sp","cod_sp_sec","cuenta_no","porciento","estado"];
}
