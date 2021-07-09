<?php

use Illuminate\Database\Seeder;
use App\Librerias\noempleados;
use Illuminate\Support\Facades\DB;

class empleadosSeeder extends Seeder
{    
    public function run()
    {

        DB::table('noempleados')->truncate();
        
        $empleado = array(
            [
                'calle'                 => 'XXXXXXXXXXXX',
                'cedula'                => '22500192319',
                'cod_cia'               => 1,         
                'departamento'          => 1,
                'email'                 => 'valentinrodriguez1427@gmail.com',
                'fecha_entrada'         => '2020-10-27',
                'fecha_inicio_c'        => '2020-10-27',
                'fecha_nacimiento'      => '2020-10-27',
                'area'                  => 1,
                'id_puesto'             => 1,
                'id_pais'               => 1,
                'id_region'             => 7,
                'id_provincia'          => 19,
                'id_municipio'          => 69,
                'id_ciudad'             => 69,
                'suc_id'                => 1, 
                'licencia'              => '654654',
                'paga_seg'              => 'si',
                'poncha'                => 'si',
                'primernombre'          => 'provisional', 
                'segundonombre'         => 'provisional',
                'primerapellido'        => 'provisional',
                'is_sup'                => 'si',
                'segundoapellido'       => 'provisional',
                'sexo'                  => "M",
                'cod_tss'               => "12586523981",
                'sueldo'                => 1000000,
                'telefono'              => "(666)-666-6666",
                'cuenta_no'             => '0',
                'tipo_empleado'         => 1,
                'turno'                 => 1, 
                'nomina'                => 1,
                'no_cuenta_banco'       => '1254523695214526',
                'id_moneda'             => 1,
                'estado'                => 'inactivo',
                'usuario_creador'       => 'movilsoluciones'
            ]
        );

        foreach ($empleado as $key => $value) {
            noempleados::create($value);
        }
    }
}
