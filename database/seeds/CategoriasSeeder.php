<?php

use Illuminate\Database\Seeder;
use App\Librerias\CategoriasModel;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            ['id_categoria' => 1, 'descripcion' => 'servicio','usuario_creador' => 'movilsoluciones','estado' => 'inactivo'],
            ['id_categoria' => 2, 'descripcion' => 'digital','usuario_creador' => 'movilsoluciones','estado' => 'inactivo'],
            ['id_categoria' => 3, 'descripcion' => 'categoria generica','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_categoria' => 4, 'descripcion' => 'Ropa de mujer','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_categoria' => 5, 'descripcion' => 'Ropa de hombre','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_categoria' => 6, 'descripcion' => 'Celulares y Tabletas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_categoria' => 7, 'descripcion' => 'Computadoras','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_categoria' => 8, 'descripcion' => 'Electrónica','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_categoria' => 9, 'descripcion' => 'joyeria y relojes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_categoria' => 10, 'descripcion' => 'Hogar','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_categoria' => 11, 'descripcion' => 'Juguetes y ropas de bebe','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_categoria' => 12, 'descripcion' => 'Deporte','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_categoria' => 13, 'descripcion' => 'Salud y belleza','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_categoria' => 14, 'descripcion' => 'automotriz','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_categoria' => 15, 'descripcion' => 'Herramienta','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
        );

        foreach ($data as $key => $value) {
            CategoriasModel::create($value);  
        }
        
    }
}