<?php

namespace App\Librerias\empresa;

use Illuminate\Database\Eloquent\Model;

class areasEmpresa extends Model
{
    protected $connection = 'mov_empresa';
    protected $fillable = ["depto","cod_cia","suc_id","descripcion","estado","usuario_creador"];     
}
