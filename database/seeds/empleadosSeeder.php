<?php

use Illuminate\Database\Seeder;
use App\Librerias\noempleados;

class empleadosSeeder extends Seeder
{    
    public function run()
    {
        $empleado = array(
            'departamento'	        => 1,
            'id_puesto'	            => 1,
            'id_nivel'	            => 1,
            'primernombre'	        => 'provisional', 
            'segundonombre'	        => 'provisional',
            'primerapellido'        => 'provisional',
            'segundoapellido'       => 'provisional',
            'fecha_entrada'	        => '2020-10-27',
            'fecha_salida'	        => '2020-10-27',
            'fecha_termino_contrato'=> '2020-10-27',
            'fecha_nacimiento'	    => '2020-10-27',
            'estado_civil'	        => 'soltero',
            'tipo_sangre'	        => 'O+',
            'cedula'	            => '22500192319',
            'licencia'	            => '654654',
            'sueldo'                => 0,
            'id_moneda'             => 1,
            'id_pais'               => 1,
            'tipo_empleado'         => 1,
            'tipo_cuenta'           => 1,
            'cuenta_no'             => 111,
            'monto_adicional'       => 0,
            'foto_empleado'	        => '',
            'is_vend'               => 'si',
            'is_sup'                => 'si',
            'calle'                 => 'XXXXXXXXXXXX',
            'sector'                => 'XXXXXXXXXXXX',
            'localidad_no'          => 'XXXXXXXXXXXX',
            'id_ciudad'	            => 1,
            'email'	                => 'valentinrodriguez1427@gmail.com',
            'codigobancodestino'    => 'XXXXX',
            'digiverbancodestino'   => 'X',
            'cuentabancaria'        => 'XXXXX',
            'tipo_sueldo'           => 'XXXXX',
            'codigoretirocomercial' => 'XXXXX',
            'estadolegal'           => 'XXXXX',
            'estado'                => 'inactivo',
            'usuario_creador'       => 'movilsoluciones'
        );

        noempleados::create($empleado);
    }
}
