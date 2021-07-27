<?php

use Illuminate\Database\Seeder;
use App\Librerias\SubCategoria;

class SubCategoriaSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            // ROPA MUJER
            ['id_subcategoria' => 1, 'id_categoria' => 4, 'descripcion' => 'Ropa','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 2, 'id_categoria' => 4, 'descripcion' => 'Trajes de bano','usuario_creador' => 'movilsoluciones','estado' => 'inactivo'],
            ['id_subcategoria' => 3, 'id_categoria' => 4, 'descripcion' => 'Lencería y ropa interior','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 4, 'id_categoria' => 4, 'descripcion' => 'Accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // ROPA HOMBRE
            ['id_subcategoria' => 5, 'id_categoria' => 5, 'descripcion' => 'Ropa','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 6, 'id_categoria' => 5, 'descripcion' => 'Ropa interior','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 7, 'id_categoria' => 5, 'descripcion' => 'Accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // Celulares y Tabletas
            ['id_subcategoria' => 8, 'id_categoria' => 6, 'descripcion' => 'Celulares','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 9, 'id_categoria' => 6, 'descripcion' => 'Accesorios para Celulares','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 10, 'id_categoria' => 6, 'descripcion' => 'Piezas para Celulares','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 11, 'id_categoria' => 6, 'descripcion' => 'Equipos de comunicación','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
        );

        foreach ($data as $key => $value) {
            SubCategoria::create($value);  
        }
    }
}

