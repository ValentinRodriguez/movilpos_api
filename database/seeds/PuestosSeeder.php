<?php

use Illuminate\Database\Seeder;
use App\Librerias\Nopuesto;
use Illuminate\Support\Facades\DB;

class PuestosSeeder extends Seeder
{    
    public function run()   {
        
        DB::table('nopuestos')->truncate();
        
        $puestos = array(
            ['id_puesto'=> 1, 'titulo'=> 'puesto general','sueldo_inicial'  => 0,'sueldo_actual'=> 0,'descripcion'=>'puesto para el usuario inicial','usuario_creador' => 'movilsoluciones','estado'=> 'activo'],
            ['id_puesto'=> 2, 'titulo'=> 'cajero/a','sueldo_inicial'  => 0,'sueldo_actual'=> 0,'descripcion'=>'puesto de caja','usuario_creador' => 'movilsoluciones','estado'=> 'activo'],
            ['id_puesto'=> 3, 'titulo'=> 'vendedor/a','sueldo_inicial'  => 0,'sueldo_actual'=> 0,'descripcion'=>'vendedor','usuario_creador' => 'movilsoluciones','estado'=> 'activo'],
        );

        foreach ($puestos as $key => $value) {
            Nopuesto::create($value);     
        }
    }
}
