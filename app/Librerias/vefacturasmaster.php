<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class vefacturasmaster extends Model
{
   protected $table = 'vefacturasmaster';
   protected $fillable = ['factura','cod_cia','suc_id','fecha_factura','num_oc','conduce','tipo_cliente','sec_cliente','nombre_cli','direccion','id_pais',
                          'id_ciudad','id_zonalocal','num_emp','total_bruto','descuento','devuelta','monto_itbis','sub_total','neto','tarjeta_no','cheque_no',
                          'tarjeta','efectivo','cheque','estado','usuario_creador','usuario_modificador'];

   public function detalle() {
        return $this->hasmany('app\librerias\vefacturadetalle');
   }
}
