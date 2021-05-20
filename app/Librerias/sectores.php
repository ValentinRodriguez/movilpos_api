<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class sectores extends Model
{
    protected $fillable = ["d_sector","id_ciudad","descripcion","codigo_postal","estado"];
}
