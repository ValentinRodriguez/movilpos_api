<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class cpAnalisisSaldoPendiente extends Model
{
    protected $table ='cp_partidas';
   /* protected $table = 'cp_transacciones as a';
    protected $fillable = ['fecha','cod_sp','cod_sp_sec','factura','tipo_doc','cuenta_no','departamento','num_doc',        
    'detalles','debito','credito','cod_cia','porciento','usuario_creador','estado',];


    public function ScopeFechaInicial($query, $fechainicial){
       
        if($fechainicial){
           return $query->where('a.fecha_orig','<=',"$fechainicial");
        }
}   
*/
}
