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
            ['id_brand' => 3,'descripcion' => 'marca generica1','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_brand' => 4,'descripcion' => 'marca generica2','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_brand' => 5,'descripcion' => 'marca generica3','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_brand' => 6,'descripcion' => 'marca generica4','usuario_creador' => 'movilsoluciones','estado' => 'activo']
            
        );

        foreach ($data as $key => $value) {
            BrandsModel::create($value);  
        }

    }
}
