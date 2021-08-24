<?php

namespace App\Librerias\inventario;
use Illuminate\Database\Eloquent\Model;

class invcuentasmovimientos extends Model
{
    protected $connection = 'mov_inventario';
    protected $table = 'invcuentasmovimientos';
    protected $fillable = ['id_tipomov','cuenta_no','estado'];
}
