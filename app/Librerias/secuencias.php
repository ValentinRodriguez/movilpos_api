<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class secuencias extends Model
{
    protected $fillable = ['documento','cuenta_no','estado','usuario_creador','tipo_doc'];
}
