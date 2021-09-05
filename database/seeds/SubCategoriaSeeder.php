<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Librerias\tienda\SubCategoria;
use Illuminate\Support\Facades\DB;

class SubCategoriaSeeder extends Seeder
{
    public function run()
    {
        DB::table('mov_tienda.sub_categorias')->truncate();

        $data = array(
            // SERVICIO
            ['id_subcategoria' => 67, 'id_categoria' => 1,  'id_atributo' => '[]', 'slug' => Str::slug('Clases o tutoría'),  'descripcion' => 'Clases o tutoría','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            // DIGITALES
            ['id_subcategoria' => 66, 'id_categoria' => 2,  'id_atributo' => '[]', 'slug' => Str::slug('Producto Digital'),  'descripcion' => 'Producto Digital','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // ROPA MUJER
            ['id_subcategoria' => 1, 'id_categoria' => 4,  'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Ropa'),  'descripcion' => 'Ropa','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 62, 'id_categoria' => 4,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Bolsos y Carteras'),  'descripcion' => 'Bolsos y Carteras','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 63, 'id_categoria' => 4,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Calzados'),  'descripcion' => 'Calzados','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 2, 'id_categoria' => 4,  'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Trajes de bano'),  'descripcion' => 'Trajes de bano','usuario_creador' => 'movilsoluciones','estado' => 'inactivo'],
            ['id_subcategoria' => 3, 'id_categoria' => 4,  'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Lenceria y ropa interior'),  'descripcion' => 'Lenceria y ropa interior','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 4, 'id_categoria' => 4,  'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Accesorios'),  'descripcion' => 'Accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // ROPA HOMBRE
            ['id_subcategoria' => 5, 'id_categoria' => 5,  'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Ropa'),  'descripcion' => 'Ropa','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 64, 'id_categoria' => 5,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Bolsos y Carteras'),  'descripcion' => 'Bolsos y Carteras','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 65, 'id_categoria' => 5,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Calzados'),  'descripcion' => 'Calzados','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 6, 'id_categoria' => 5,  'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Ropa interior'),  'descripcion' => 'Ropa interior','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 7, 'id_categoria' => 5,  'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Accesorios'),  'descripcion' => 'Accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // Celulares y Tabletas
            ['id_subcategoria' => 8, 'id_categoria' => 6,  'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Celulares'),  'descripcion' => 'Celulares','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 9, 'id_categoria' => 6,  'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Accesorios para Celulares'),  'descripcion' => 'Accesorios para Celulares','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 10, 'id_categoria' => 6,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Piezas para Celulares'),  'descripcion' => 'Piezas para Celulares','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 11, 'id_categoria' => 6,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Equipos de comunicacion'),  'descripcion' => 'Equipos de comunicacion','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // Computadoras
            ['id_subcategoria' => 12, 'id_categoria' => 7,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Componentes y perifericos'),  'descripcion' => 'Componentes y perifericos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 13, 'id_categoria' => 7,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Laptops'),  'descripcion' => 'Laptops','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 14, 'id_categoria' => 7,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Sistemas de Seguridad'),  'descripcion' => 'Sistemas de Seguridad','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 15, 'id_categoria' => 7,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Dispositivos de almacenamiento'),  'descripcion' => 'Dispositivos de almacenamiento','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 16, 'id_categoria' => 7,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Equipos de oficina'),  'descripcion' => 'Equipos de oficina','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 17, 'id_categoria' => 7,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Redes'),  'descripcion' => 'Redes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // Electronica
            ['id_subcategoria' => 18, 'id_categoria' => 8,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Piezas y accesorios'),  'descripcion' => 'Piezas y accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 19, 'id_categoria' => 8,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Audio y video'),  'descripcion' => 'Audio y video','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 20, 'id_categoria' => 8,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Camaras y fotografia'),  'descripcion' => 'Camaras y fotografia','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 21, 'id_categoria' => 8,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Electronica inteligente'),  'descripcion' => 'Electronica inteligente','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 22, 'id_categoria' => 8,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Videojuegos'),  'descripcion' => 'Videojuegos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // Joyeria y relojes
            ['id_subcategoria' => 23, 'id_categoria' => 9,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Joyeria fina'),  'descripcion' => 'Joyeria fina','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 24, 'id_categoria' => 9,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Relojes de hombre'),  'descripcion' => 'Relojes de hombre','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 25, 'id_categoria' => 9,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Relojes de mujer'),  'descripcion' => 'Relojes de mujer','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 26, 'id_categoria' => 9,   'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('joyeria fantasia'),  'descripcion' => 'joyeria fantasia','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // Hogar
            ['id_subcategoria' => 27, 'id_categoria' => 10, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('decoracion'),  'descripcion' => 'decoracion','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 28, 'id_categoria' => 10, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Productos para mascotas'),  'descripcion' => 'Productos para mascotas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 29, 'id_categoria' => 10, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Textil para el hogar'),  'descripcion' => 'Textil para el hogar','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 30, 'id_categoria' => 10, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Muebles'),  'descripcion' => 'Muebles','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 31, 'id_categoria' => 10, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Cocina'),  'descripcion' => 'Cocina','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 32, 'id_categoria' => 10, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('electrodomesticos'),  'descripcion' => 'electrodomesticos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 33, 'id_categoria' => 10, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Jardineria'),  'descripcion' => 'Jardineria','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            // Juguetes y ropas de bebe
            ['id_subcategoria' => 34, 'id_categoria' => 11, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Categorias populares'),  'descripcion' => 'Categorias populares','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 35, 'id_categoria' => 11, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Bebe (0-3 años)'),  'descripcion' => 'Bebe (0-3 años)','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 36, 'id_categoria' => 11, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Para niñas'),  'descripcion' => 'Para niñas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 37, 'id_categoria' => 11, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Para niños'),  'descripcion' => 'Para niños','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 38, 'id_categoria' => 11, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('para embarazadas '),  'descripcion' => 'para embarazadas ','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 39, 'id_categoria' => 11, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Juguetes'),  'descripcion' => 'Juguetes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // Deporte
            ['id_subcategoria' => 40, 'id_categoria' => 12, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Deportes acuaticos'),  'descripcion' => 'Deportes acuaticos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 41, 'id_categoria' => 12, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Bicicletas'),  'descripcion' => 'Bicicletas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 42, 'id_categoria' => 12, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Calzado Deportivo'),  'descripcion' => 'Calzado Deportivo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 43, 'id_categoria' => 12, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Pesca'),  'descripcion' => 'Pesca','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 44, 'id_categoria' => 12, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('ropa deportiva'),  'descripcion' => 'ropa deportiva','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 45, 'id_categoria' => 12, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('otros'),  'descripcion' => 'otros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 46, 'id_categoria' => 13, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Extensiones de pelo y pelucas'),  'descripcion' => 'Extensiones de pelo y pelucas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 47, 'id_categoria' => 13, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Maquillaje'),  'descripcion' => 'Maquillaje','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 48, 'id_categoria' => 13, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Cuidado de la salud'),  'descripcion' => 'Cuidado de la salud','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 49, 'id_categoria' => 13, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Cuidado de la piel'),  'descripcion' => 'Cuidado de la piel','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 50, 'id_categoria' => 13, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Manicura y pedicura'),  'descripcion' => 'Manicura y pedicura','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 51, 'id_categoria' => 13, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('cuidado personal'),  'descripcion' => 'cuidado personal','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 52, 'id_categoria' => 13, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Articulos para adultos'),  'descripcion' => 'Articulos para adultos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 53, 'id_categoria' => 14, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Repuestos para coches'),  'descripcion' => 'Repuestos para coches','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 54, 'id_categoria' => 14, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Herramientas y mantenimiento'),  'descripcion' => 'Herramientas y mantenimiento','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 55, 'id_categoria' => 14, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Electronica para coche'),  'descripcion' => 'Electronica para coche','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 56, 'id_categoria' => 14, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Accesorios para el exterior'),  'descripcion' => 'Accesorios para el exterior','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 57, 'id_categoria' => 14, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Piezas y accesorios para moto'),  'descripcion' => 'Piezas y accesorios para moto','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 58, 'id_categoria' => 14, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Accesorios para el interior'),  'descripcion' => 'Accesorios para el interior','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 59, 'id_categoria' => 15, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Herramientas'),  'descripcion' => 'Herramientas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 60, 'id_categoria' => 15, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Iluminacion'),  'descripcion' => 'Iluminacion','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 61, 'id_categoria' => 15, 'id_atributo' => '["1","3","4","5","6"]', 'slug' => Str::slug('Bricolaje'),  'descripcion' => 'Bricolaje','usuario_creador' => 'movilsoluciones','estado' => 'activo']

        );

        foreach ($data as $key => $value) {
            SubCategoria::create($value);  
        }
    }
}

