<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class InvTramosModel extends Model
{
    protected $table = "invtramos";
    protected $fillable = ["titulo","bodega","id_seccion","us_crea"];
}
