<?php

namespace App\Librerias\globales;

use Illuminate\Database\Eloquent\Model;

class sectores extends Model
{
    protected $connection = 'mov_globales';
    protected $fillable = ["d_sector","id_ciudad","descripcion","codigo_postal","estado"];
}
