<?php

use Illuminate\Database\Seeder;
use App\Librerias\inventario\Propiedadesprod;

class propiedadesSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            ['id_propiedad' => 1,'descripcion' => 'servicio','usuario_creador' => 'movilsoluciones','estado' => 'inactivo'],
            ['id_propiedad' => 2,'descripcion' => 'digital','usuario_creador' => 'movilsoluciones','estado' => 'inactivo'],
            ['id_propiedad' => 3,'descripcion' => 'categoria generica1','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_propiedad' => 4,'descripcion' => 'categoria generica2','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_propiedad' => 5,'descripcion' => 'categoria generica3','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_propiedad' => 6,'descripcion' => 'categoria generica4','usuario_creador' => 'movilsoluciones','estado' => 'activo']
        );

        foreach ($data as $key => $value) {
            Propiedadesprod::create($value);  
        }
    }
}
