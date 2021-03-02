<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class invcuentasmovimientos extends Model
{
    protected $table = 'invcuentasmovimientos';
    protected $fillable = ['id_tipomov','cuenta_no','estado'];
}
