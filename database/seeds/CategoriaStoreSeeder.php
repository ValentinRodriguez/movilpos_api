<?php

use Illuminate\Database\Seeder;
use App\Librerias\tienda\CategoriaStore;
use Illuminate\Support\Str;

class CategoriaStoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['id_categoria' => 1, 'id_atributo' => '', 'descripcion' => 'servicio',                  'slug' => Str::slug('servicio') , 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['id_categoria' => 2, 'id_atributo' => '', 'descripcion' => 'digital',                   'slug' => Str::slug('digital'), 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['id_categoria' => 3, 'id_atributo' => '', 'descripcion' => 'categoria generica',        'slug' => Str::slug('categoria generica'), 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            
            ['id_categoria' => 4, 'id_atributo' => '["7","1","9"]', 'descripcion' => 'Ropa de mujer',             'slug' => Str::slug('Ropa de mujer'), 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['id_categoria' => 5, 'id_atributo' => '["7","1","9"]', 'descripcion' => 'Ropa de hombre',            'slug' => Str::slug('Ropa de hombre'), 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['id_categoria' => 6, 'id_atributo' => '["7","3","4","5","9"]', 'descripcion' => 'Celulares y Tabletas',      'slug' => Str::slug('Celulares y Tabletas'), 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['id_categoria' => 7, 'id_atributo' => '["7","3","4","6","9"]', 'descripcion' => 'Computadoras',              'slug' => Str::slug('Computadoras'), 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['id_categoria' => 8, 'id_atributo' => '["7","9"]', 'descripcion' => 'Electronica',               'slug' => Str::slug('Electronica'), 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['id_categoria' => 9, 'id_atributo' => '["7","10"]', 'descripcion' => 'joyeria y relojes',         'slug' => Str::slug('joyeria y relojes'), 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['id_categoria' => 10, 'id_atributo' => '["7","9"]', 'descripcion' => 'Hogar',                    'slug' => Str::slug('Hogar'), 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['id_categoria' => 11, 'id_atributo' => '["7","9","11"]', 'descripcion' => 'Juguetes y ropas de bebe', 'slug' => Str::slug('Juguetes y ropas de bebe'), 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            
            ['id_categoria' => 12, 'id_atributo' => '["7","9","12"]', 'descripcion' => 'Deporte',                  'slug' => Str::slug('Deporte'), 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['id_categoria' => 13, 'id_atributo' => '["7","9"]', 'descripcion' => 'Salud y belleza',          'slug' => Str::slug('Salud y belleza'), 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['id_categoria' => 14, 'id_atributo' => '["7","9","16","17"]', 'descripcion' => 'automotriz',               'slug' => Str::slug('automotriz'), 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['id_categoria' => 15, 'id_atributo' => '["7","9"]', 'descripcion' => 'Herramientas',             'slug' => Str::slug('Herramienta'), 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
        );

        foreach ($data as $key => $value) {
            CategoriaStore::create($value);  
        }
    }
}
