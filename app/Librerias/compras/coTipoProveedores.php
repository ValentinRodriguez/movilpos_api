<?php

namespace App\Librerias\compras;

use Illuminate\Database\Eloquent\Model;

class coTipoProveedores extends Model
{
    protected $connection = 'mov_compras';
    protected $fillable = ['descripcion','tipo_proveedor','cuenta_no','usuario_creador','usuario_modificador','estado'];

}
