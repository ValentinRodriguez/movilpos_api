<?php

namespace App\Librerias\inventario;
use Illuminate\Database\Eloquent\Model;

class requisicionesMaster extends Model
{
    protected $connection = 'mov_inventario';
    protected $fillable = ['num_req','fech_req','departamento','cod_emp_sec','uso','prioridad','procesada',
                           'num_oc','tipo_cliente','sec_cliente','nombre_cliente','observacion','documento','estado'];
}
