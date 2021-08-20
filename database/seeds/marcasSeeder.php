<?php

use Illuminate\Database\Seeder;
use App\Librerias\inventario\BrandsModel;

class marcasSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            ['id_brand' => 1,'descripcion' => 'servicio','usuario_creador' => 'movilsoluciones','estado' => 'inactivo'],
            ['id_brand' => 2,'descripcion' => 'digital','usuario_creador' => 'movilsoluciones','estado' => 'inactivo'],
            ['id_brand' => 3,'descripcion' => 'marca generica','usuario_creador' => 'movilsoluciones','estado' => 'activo']
        );

        foreach ($data as $key => $value) {
            BrandsModel::create($value);  
        }

    }
}
