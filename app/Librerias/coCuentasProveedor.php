<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class coCuentasProveedor extends Model
{
    protected $table = 'co_cuentas_proveedores';
    protected $fillable = ["descripcion","cod_sp","cod_sp_sec","cuenta_no","porciento","estado"];
}
