<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class noempleados extends Model
{
    protected $fillable =[
        'primernombre','segundonombre','primerapellido','segundoapellido','cod_cia','cod_tss','codigo_es','codigo_retiro_bco','credito','educacion',
        'departamento','fecha_inicio_c','fecha_suspencion','fecha_ultimo_aumento','suc_id','id_puesto','id_pais','id_municipio','id_provincia',
        'id_region','id_ciudad','id_sector','calle','cedula','codbancodestino','cod_nac','email','digiverbancodestino','cuenta_no','estado_civil',
        'fecha_nacimiento','fecha_entrada','fecha_termino_contrato','foto_empleado','licencia','is_sup','no_cuenta_banco','monto_adicional','nomina',
        'sueldo','telefono','observacion','paga_seg','poncha','sexo','tasa','tipocuenta','estadolegal','tipo_sangre','area','turno','id_nivel',
        'id_moneda','tipo_empleado','codigobancodestino','cuentabancaria','codigoretirocomercial','estado','usuario_creador',
        'usuario_modificador','tipo_sueldo'];
    }

