<?php

use Illuminate\Database\Seeder;
use App\Librerias\Propiedadesprod;

class propiedadesSeeder extends Seeder
{
    public function run()
    {
        $servicio = array('id_propiedad' => 1,
                          'descripcion' => 'servicio',
                          'usuario_creador' => 'movilsoluciones',
                          'estado' => 'inactivo'
        );

        $digital = array('id_propiedad' => 2,
                         'descripcion' => 'digital',
                         'usuario_creador' => 'movilsoluciones',
                         'estado' => 'inactivo'
        );

        Propiedadesprod::create($servicio);  
        Propiedadesprod::create($digital);  
    }
}
