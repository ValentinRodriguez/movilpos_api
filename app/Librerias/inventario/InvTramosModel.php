<?php

namespace App\Librerias\inventario;
use Illuminate\Database\Eloquent\Model;

class InvTramosModel extends Model
{
    protected $connection = 'mov_inventario';
    protected $table = "invtramos";
    protected $fillable = ["titulo","bodega","id_seccion","us_crea"];
}
