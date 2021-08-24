<?php

namespace App\Librerias\compras;
use Illuminate\Database\Eloquent\Model;

class coCuentasProveedor extends Model
{
    protected $connection = 'mov_compras';
    protected $table = 'co_cuentas_proveedores';
    protected $fillable = ["descripcion","cod_sp","cod_sp_sec","cuenta_no","porciento","estado"];
}
