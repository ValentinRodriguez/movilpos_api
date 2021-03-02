<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class InvseccionModel extends Model
{
    protected $table = "invsecciones";
    protected $fillable = ["bodega","titulo","us_crea"];

}
