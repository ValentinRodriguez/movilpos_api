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
            ['id_subcategoria' => 62, 'id_categoria' => 4, 'descripcion' => 'Bolsos y Carteras','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 63, 'id_categoria' => 4, 'descripcion' => 'Calzados','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 2, 'id_categoria' => 4, 'descripcion' => 'Trajes de bano','usuario_creador' => 'movilsoluciones','estado' => 'inactivo'],
            ['id_subcategoria' => 3, 'id_categoria' => 4, 'descripcion' => 'Lencería y ropa interior','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 4, 'id_categoria' => 4, 'descripcion' => 'Accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // ROPA HOMBRE
            ['id_subcategoria' => 5, 'id_categoria' => 5, 'descripcion' => 'Ropa','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 64, 'id_categoria' => 5, 'descripcion' => 'Bolsos y Carteras','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 65, 'id_categoria' => 5, 'descripcion' => 'Calzados','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 6, 'id_categoria' => 5, 'descripcion' => 'Ropa interior','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 7, 'id_categoria' => 5, 'descripcion' => 'Accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // Celulares y Tabletas
            ['id_subcategoria' => 8, 'id_categoria' => 6, 'descripcion' => 'Celulares','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 9, 'id_categoria' => 6, 'descripcion' => 'Accesorios para Celulares','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 10, 'id_categoria' => 6, 'descripcion' => 'Piezas para Celulares','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 11, 'id_categoria' => 6, 'descripcion' => 'Equipos de comunicación','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // Computadoras
            ['id_subcategoria' => 12, 'id_categoria' => 7, 'descripcion' => 'Componentes y periféricos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 13, 'id_categoria' => 7, 'descripcion' => 'Laptops','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 14, 'id_categoria' => 7, 'descripcion' => 'Sistemas de Seguridad','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 15, 'id_categoria' => 7, 'descripcion' => 'Dispositivos de almacenamiento','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 16, 'id_categoria' => 7, 'descripcion' => 'Equipos de oficina','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 17, 'id_categoria' => 7, 'descripcion' => 'Redes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // Electrónica
            ['id_subcategoria' => 18, 'id_categoria' => 8, 'descripcion' => 'Piezas y accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 19, 'id_categoria' => 8, 'descripcion' => 'Audio y vídeo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 20, 'id_categoria' => 8, 'descripcion' => 'Cámaras y fotografía','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 21, 'id_categoria' => 8, 'descripcion' => 'Electrónica inteligente','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 22, 'id_categoria' => 8, 'descripcion' => 'Videojuegos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // Joyeria y relojes
            ['id_subcategoria' => 23, 'id_categoria' => 9, 'descripcion' => 'Joyería fina','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 24, 'id_categoria' => 9, 'descripcion' => 'Relojes de hombre','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 25, 'id_categoria' => 9, 'descripcion' => 'Relojes de mujer','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 26, 'id_categoria' => 9, 'descripcion' => 'joyeria fantasia','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // Hogar
            ['id_subcategoria' => 27, 'id_categoria' => 10, 'descripcion' => 'decoracion','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 28, 'id_categoria' => 10, 'descripcion' => 'Productos para mascotas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 29, 'id_categoria' => 10, 'descripcion' => 'Textil para el hogar','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 30, 'id_categoria' => 10, 'descripcion' => 'Muebles','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 31, 'id_categoria' => 10, 'descripcion' => 'Cocina','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 32, 'id_categoria' => 10, 'descripcion' => 'electrodomesticos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 33, 'id_categoria' => 10, 'descripcion' => 'Jardinería','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            // Juguetes y ropas de bebe
            ['id_subcategoria' => 34, 'id_categoria' => 11, 'descripcion' => 'Categorías populares','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 35, 'id_categoria' => 11, 'descripcion' => 'Bebé (0-3 años)','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 36, 'id_categoria' => 11, 'descripcion' => 'Para niñas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 37, 'id_categoria' => 11, 'descripcion' => 'Para niños','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 38, 'id_categoria' => 11, 'descripcion' => 'para embarazadas ','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 39, 'id_categoria' => 11, 'descripcion' => 'Juguetes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // Deporte
            ['id_subcategoria' => 40, 'id_categoria' => 12, 'descripcion' => 'Deportes acuáticos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 41, 'id_categoria' => 12, 'descripcion' => 'Bicicletas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 42, 'id_categoria' => 12, 'descripcion' => 'Calzado Deportivo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 43, 'id_categoria' => 12, 'descripcion' => 'Pesca','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 44, 'id_categoria' => 12, 'descripcion' => 'ropa deportiva','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 45, 'id_categoria' => 12, 'descripcion' => 'otros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 46, 'id_categoria' => 13, 'descripcion' => 'Extensiones de pelo y pelucas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 47, 'id_categoria' => 13, 'descripcion' => 'Maquillaje','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 48, 'id_categoria' => 13, 'descripcion' => 'Cuidado de la salud','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 49, 'id_categoria' => 13, 'descripcion' => 'Cuidado de la piel','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 50, 'id_categoria' => 13, 'descripcion' => 'Manicura y pedicura','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 51, 'id_categoria' => 13, 'descripcion' => 'cuidado personal','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 52, 'id_categoria' => 13, 'descripcion' => 'Artículos para adultos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 53, 'id_categoria' => 14, 'descripcion' => 'Repuestos para coches','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 54, 'id_categoria' => 14, 'descripcion' => 'Herramientas y mantenimiento','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 55, 'id_categoria' => 14, 'descripcion' => 'Electrónica para coche','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 56, 'id_categoria' => 14, 'descripcion' => 'Accesorios para el exterior','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 57, 'id_categoria' => 14, 'descripcion' => 'Piezas y accesorios para moto','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 58, 'id_categoria' => 14, 'descripcion' => 'Accesorios para el interior','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 59, 'id_categoria' => 15, 'descripcion' => 'Herramientas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 60, 'id_categoria' => 15, 'descripcion' => 'Iluminación','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 61, 'id_categoria' => 15, 'descripcion' => 'Bricolaje','usuario_creador' => 'movilsoluciones','estado' => 'activo']

        );

        foreach ($data as $key => $value) {
            SubCategoria::create($value);  
        }
    }
}

