<?php

namespace App\Librerias\cuentasXcobrar;

use Illuminate\Database\Eloquent\Model;

class cc_secuencia_documentos extends Model
{
    protected $connection = 'mov_cuentasxcobrar';
    protected $table='cc_secuencia_documentos';
    protected $fillabel=['cod_vend','sec_vend','ult_recibo','tipo_doc','estado',
    'usuario_creador','usuario_modificador'];

}
