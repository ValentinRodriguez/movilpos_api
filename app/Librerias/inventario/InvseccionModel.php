<?php

namespace App\Librerias\inventario;
use Illuminate\Database\Eloquent\Model;

class InvseccionModel extends Model
{
    protected $connection = 'mov_inventario';
    protected $table = "invsecciones";
    protected $fillable = ["bodega","titulo","us_crea"];

}
