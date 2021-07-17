<?php

use Illuminate\Database\Seeder;
use App\Librerias\CategoriasModel;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            ['id_categoria' => 1,'descripcion' => 'servicio','usuario_creador' => 'movilsoluciones','estado' => 'inactivo'],
            ['id_categoria' => 2,'descripcion' => 'digital','usuario_creador' => 'movilsoluciones','estado' => 'inactivo'],
            ['id_categoria' => 3,'descripcion' => 'categoria generica','usuario_creador' => 'movilsoluciones','estado' => 'activo']
        );

        foreach ($data as $key => $value) {
            CategoriasModel::create($value);  
        }
    }
}
