<?php

use Illuminate\Database\Seeder;
use App\Librerias\Nopuesto;

class PuestosSeeder extends Seeder
{    
    public function run()   {
        $puesto = array(
                        'id_puesto'	      => 1,
                        'titulo'	      => 'puesto provicional',
                        'sueldo_inicial'  => 0,
                        'sueldo_actual'   => 0,
                        'descripcion'     => 'puesto para el usuario inicial',
                        'usuario_creador' => 'movilsoluciones',
                        'estado'          => 'inactivo',
        );
        Nopuesto::create($puesto);     
    }
}
