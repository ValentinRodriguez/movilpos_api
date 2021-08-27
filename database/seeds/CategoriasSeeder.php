<?php

use Illuminate\Database\Seeder;
use App\Librerias\inventario\CategoriasModel;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            ['id_categoria' => 1, 'descripcion' => 'servicio','usuario_creador' => 'movilsoluciones','estado' => 'inactivo'],
            ['id_categoria' => 2, 'descripcion' => 'digital','usuario_creador' => 'movilsoluciones','estado' => 'inactivo'],
            ['id_categoria' => 3, 'descripcion' => 'categoria generica1','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_categoria' => 4, 'descripcion' => 'categoria generica2','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_categoria' => 5, 'descripcion' => 'categoria generica3','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_categoria' => 6, 'descripcion' => 'categoria generica4','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
        );

        foreach ($data as $key => $value) {
            CategoriasModel::create($value);  
        }
        
    }
}