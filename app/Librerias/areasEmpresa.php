<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class areasEmpresa extends Model
{
    protected $fillable = ["departamento","cod_cia","suc_id","descripcion","estado","usuario_creador"];     
}
