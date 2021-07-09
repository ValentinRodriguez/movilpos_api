<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class noempleados extends Model
{
    protected $fillable =[
        "apell1_emp","apell2_emp","calle","cedula","cod_cia","cod_tss","codigo_es","codigo_retiro_bco","credito","cuenta_fi","cuenta_no","digiverbancodestino",
        "email","estado","estado_legal","fech_efec","fech_nac","fecha_inicio_c","fecha_suspencion","fecha_suspension","fecha_termino_c","fecha_ultimo_aumento","foto_empleado",
        "horario","horario_final","horario_inicial","id_pais","is_sup","licencia","nom1_emp","nom2_emp","nomina","observacion","paga_seg","poncha","sessionId","sexo","sueldo_ac",
        "tasa","telefono","tipo_sueldo","tipocuenta","usuario_creador"
    ];
}
