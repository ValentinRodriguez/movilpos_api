<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class coTipoProveedores extends Model
{
    protected $fillable = ['descripcion','tipo_proveedor','cuenta_no','usuario_creador','usuario_modificador','estado'];

}
