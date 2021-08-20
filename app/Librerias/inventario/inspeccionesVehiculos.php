<?php

namespace App\Librerias\inventario;
use Illuminate\Database\Eloquent\Model;

class inspeccionesVehiculos extends Model
{
    protected $connection = 'mov_inventario';
    protected $fillable =['descripcion'];
}
