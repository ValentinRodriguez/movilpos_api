<?php

use Illuminate\Database\Seeder;
use App\Librerias\SubSubCategoria;
use Illuminate\Support\Str;
class SubSubCategoriaSeeder extends Seeder
{    
    public function run()
    {
        $data = array(
            //ROPA MUJER
            ['id_subsubcategoria' => '', 'id_subcategoria' => 1, 'slug' => Str::slug('Vestidos'), 'descripcion' => 'Vestidos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 1, 'slug' => Str::slug('Camisetas'), 'descripcion' => 'Camisetas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 1, 'slug' => Str::slug('Blusas y camisas'), 'descripcion' => 'Blusas y camisas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 1, 'slug' => Str::slug('Sudaderas'), 'descripcion' => 'Sudaderas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 1, 'slug' => Str::slug('Conjuntos de mujer'), 'descripcion' => 'Conjuntos de mujer','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 1, 'slug' => Str::slug('Trajes y blazers'), 'descripcion' => 'Trajes y blazers','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 1, 'slug' => Str::slug('Bodies'), 'descripcion' => 'Bodies','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 1, 'slug' => Str::slug('Tops'), 'descripcion' => 'Tops','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 1, 'slug' => Str::slug('Abrigos y chaquetas'), 'descripcion' => 'Abrigos y chaquetas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 1, 'slug' => Str::slug('Jerséis'), 'descripcion' => 'Jerséis','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 1, 'slug' => Str::slug('Leggings'), 'descripcion' => 'Leggings','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 1, 'slug' => Str::slug('Faldas'), 'descripcion' => 'Faldas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 1, 'slug' => Str::slug('Jeans'), 'descripcion' => 'Jeans','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 1, 'slug' => Str::slug('Capris'), 'descripcion' => 'Capris','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 1, 'slug' => Str::slug('Disfraces'), 'descripcion' => 'Disfraces','usuario_creador' => 'movilsoluciones','estado' => 'activo'], 

            ['id_subsubcategoria' => '', 'id_subcategoria' => 2, 'slug' => Str::slug('Bañadores'), 'descripcion' => 'Bañadores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 2, 'slug' => Str::slug('Bikinis'), 'descripcion' => 'Bikinis','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 2, 'slug' => Str::slug('Vestidos de playa'), 'descripcion' => 'Vestidos de playa','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subsubcategoria' => '', 'id_subcategoria' => 3, 'slug' => Str::slug('Conjuntos de pijama'), 'descripcion' => 'Conjuntos de pijama','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 3, 'slug' => Str::slug('Panties'), 'descripcion' => 'Panties','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 3, 'slug' => Str::slug('Brasier'), 'descripcion' => 'Brasier','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 3, 'slug' => Str::slug('Panties y Brasier'), 'descripcion' => 'Panties y Brasier','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 3, 'slug' => Str::slug('Medias'), 'descripcion' => 'Medias','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 3, 'slug' => Str::slug('Prendas moldeadoras'), 'descripcion' => 'Prendas moldeadoras','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
        
            ['id_subsubcategoria' => '', 'id_subcategoria' => 4, 'slug' => Str::slug('accesorios para el pelo'), 'descripcion' => 'accesorios para el pelo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 4, 'slug' => Str::slug('Gafas'), 'descripcion' => 'Gafas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 4, 'slug' => Str::slug('Gorras'), 'descripcion' => 'Gorras','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 4, 'slug' => Str::slug('Sombreros'), 'descripcion' => 'Sombreros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 4, 'slug' => Str::slug('Cinturones'), 'descripcion' => 'Cinturones','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // ROPA HOMBRE
            ['id_subsubcategoria' => '', 'id_subcategoria' => 5, 'slug' => Str::slug('Sudaderas'), 'descripcion' => 'Sudaderas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 5, 'slug' => Str::slug('Camisas'), 'descripcion' => 'Camisas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 5, 'slug' => Str::slug('Pantalones'), 'descripcion' => 'Pantalones','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 5, 'slug' => Str::slug('Chaquetas'), 'descripcion' => 'Chaquetas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 5, 'slug' => Str::slug('Suéteres'), 'descripcion' => 'Suéteres','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 5, 'slug' => Str::slug('Trajes y blazers'), 'descripcion' => 'Trajes y blazers','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
                        
            ['id_subsubcategoria' => '', 'id_subcategoria' => 6, 'slug' => Str::slug('Boxers'), 'descripcion' => 'Boxers','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 6, 'slug' => Str::slug('Calzoncillos'), 'descripcion' => 'Calzoncillos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 6, 'slug' => Str::slug('Pijamas'), 'descripcion' => 'Pijamas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],    
            
            ['id_subsubcategoria' => '', 'id_subcategoria' => 7, 'slug' => Str::slug('Bufandas'), 'descripcion' => 'Bufandas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 7, 'slug' => Str::slug('Gorras, Sombreros y boinas'), 'descripcion' => 'Gorras, Sombreros y boinas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // Celulares y Tabletas
            ['id_subsubcategoria' => '', 'id_subcategoria' => 8, 'slug' => Str::slug('iPhones'), 'descripcion' => 'iPhones','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 8, 'slug' => Str::slug('HUAWEI'), 'descripcion' => 'HUAWEI','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 8, 'slug' => Str::slug('Samsung'), 'descripcion' => 'Samsung','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 8, 'slug' => Str::slug('Otros'), 'descripcion' => 'Otros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subsubcategoria' => '', 'id_subcategoria' => 9, 'slug' => Str::slug('Forros'), 'descripcion' => 'Forros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 9, 'slug' => Str::slug('Cables'), 'descripcion' => 'Cables','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 9, 'slug' => Str::slug('Cargadores'), 'descripcion' => 'Cargadores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 9, 'slug' => Str::slug('Batería portátil'), 'descripcion' => 'Batería portátil','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 9, 'slug' => Str::slug('Soportes'), 'descripcion' => 'Soportes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 9, 'slug' => Str::slug('Protectores de pantalla'), 'descripcion' => 'Protectores de pantalla','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 9, 'slug' => Str::slug('Cargadores inalámbricos'), 'descripcion' => 'Cargadores inalámbricos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 9, 'slug' => Str::slug('Cargadores para coche'), 'descripcion' => 'Cargadores para coche','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 9, 'slug' => Str::slug('Adaptadores'), 'descripcion' => 'Adaptadores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subsubcategoria' => '', 'id_subcategoria' => 10,  'slug' => Str::slug('Pantallas'), 'descripcion' => 'Pantallas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 10,  'slug' => Str::slug('Baterias'), 'descripcion' => 'Baterias','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 10,  'slug' => Str::slug('Carcasas'), 'descripcion' => 'Carcasas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 11,  'slug' => Str::slug('Walkie Talkie'), 'descripcion' => 'Walkie Talkie','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 11,  'slug' => Str::slug('Otros'), 'descripcion' => 'Otros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // Computadoras
            ['id_subsubcategoria' => '', 'id_subcategoria' => 12,  'slug' => Str::slug('Procesadores'), 'descripcion' => 'Procesadores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 12,  'slug' => Str::slug('Placas base'), 'descripcion' => 'Placas base','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 12,  'slug' => Str::slug('Tarjetas gráficas'), 'descripcion' => 'Tarjetas gráficas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 12,  'slug' => Str::slug('Ratones'), 'descripcion' => 'Ratones','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 12,  'slug' => Str::slug('Teclados'), 'descripcion' => 'Teclados','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subsubcategoria' => '', 'id_subcategoria' => 13,  'slug' => Str::slug('Laptops'), 'descripcion' => 'Laptops','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 13,  'slug' => Str::slug('Accesorios para portátiles'), 'descripcion' => 'Accesorios para portátiles','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 14,  'slug' => Str::slug('Camaras de Vigilancia'), 'descripcion' => 'Camaras de Vigilancia','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 14,  'slug' => Str::slug('Control de accesos'), 'descripcion' => 'Control de accesos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 14,  'slug' => Str::slug('Detectores de humo'), 'descripcion' => 'Detectores de humo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 14,  'slug' => Str::slug('Equipos de protección y seguridad'), 'descripcion' => 'Equipos de protección y seguridad','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 14,  'slug' => Str::slug('Alarmas y sensores'), 'descripcion' => 'Alarmas y sensores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 14,  'slug' => Str::slug('Intercoms'), 'descripcion' => 'Intercoms','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 15,  'slug' => Str::slug('Memorias USB'), 'descripcion' => 'Memorias USB','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 15,  'slug' => Str::slug('Discos duros'), 'descripcion' => 'Discos duros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 15,  'slug' => Str::slug('discos duros externos'), 'descripcion' => 'discos duros externos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 16,  'slug' => Str::slug('Impresoras 3D y accesorios'), 'descripcion' => 'Impresoras 3D y accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 16,  'slug' => Str::slug('Impresoras y accesorios'), 'descripcion' => 'Impresoras y accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 16,  'slug' => Str::slug('Escáneres'), 'descripcion' => 'Escáneres','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 17,  'slug' => Str::slug('Routers inalámbricos'), 'descripcion' => 'Routers inalámbricos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 17,  'slug' => Str::slug('Tarjetas de red'), 'descripcion' => 'Tarjetas de red','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 17,  'slug' => Str::slug('equipos de redes'), 'descripcion' => 'equipos de redes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            // Electrónica
            ['id_subsubcategoria' => '', 'id_subcategoria' => 18,  'slug' => Str::slug('Cables y adaptadores'), 'descripcion' => 'Cables y adaptadores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 18,  'slug' => Str::slug('Cigarrillos electrónicos'), 'descripcion' => 'Cigarrillos electrónicos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 18,  'slug' => Str::slug('Cargadores'), 'descripcion' => 'Cargadores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 18,  'slug' => Str::slug('Electrónica casera'), 'descripcion' => 'Electrónica casera','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 19,  'slug' => Str::slug('Televisores'), 'descripcion' => 'Televisores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 19,  'slug' => Str::slug('Proyectores'), 'descripcion' => 'Proyectores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 19,  'slug' => Str::slug('Sticks TV'), 'descripcion' => 'Sticks TV','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 19,  'slug' => Str::slug('Auriculares'), 'descripcion' => 'Auriculares','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 19,  'slug' => Str::slug('Altavoces'), 'descripcion' => 'Altavoces','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 19,  'slug' => Str::slug('Reproductores MP3'), 'descripcion' => 'Reproductores MP3','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 19,  'slug' => Str::slug('Micrófonos'), 'descripcion' => 'Micrófonos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 19,  'slug' => Str::slug('Dispositivos RV y AR'), 'descripcion' => 'Dispositivos RV y AR','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 20,  'slug' => Str::slug('Cámaras digitales'), 'descripcion' => 'Cámaras digitales','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 20,  'slug' => Str::slug('Cámaras de vídeo'), 'descripcion' => 'Cámaras de vídeo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 20,  'slug' => Str::slug('Drones con cámara'), 'descripcion' => 'Drones con cámara','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 20,  'slug' => Str::slug('Cámaras de acción'), 'descripcion' => 'Cámaras de acción','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 20,  'slug' => Str::slug('accesorios'), 'descripcion' => 'accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subsubcategoria' => '', 'id_subcategoria' => 21,  'slug' => Str::slug('Dispositivos inteligentes'), 'descripcion' => 'Dispositivos inteligentes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 21,  'slug' => Str::slug('Electrodomésticos inteligentes'), 'descripcion' => 'Electrodomésticos inteligentes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 21,  'slug' => Str::slug('Accesorios'), 'descripcion' => 'Accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 21,  'slug' => Str::slug('Mandos a distancia'), 'descripcion' => 'Mandos a distancia','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 21,  'slug' => Str::slug('Smartwatches'), 'descripcion' => 'Smartwatches','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 21,  'slug' => Str::slug('Smartbands'), 'descripcion' => 'Smartbands','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 22,  'slug' => Str::slug('consolas'), 'descripcion' => 'consolas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 22,  'slug' => Str::slug('Gamepads'), 'descripcion' => 'Gamepads','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 22,  'slug' => Str::slug('Joysticks'), 'descripcion' => 'Joysticks','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 23,  'slug' => Str::slug('Joyas de plata 925'), 'descripcion' => 'Joyas de plata 925','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 23,  'slug' => Str::slug('Joyas de diamantes'), 'descripcion' => 'Joyas de diamantes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 23,  'slug' => Str::slug('Joyería de perlas'), 'descripcion' => 'Joyería de perlas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 23,  'slug' => Str::slug('Joyería con gemas'), 'descripcion' => 'Joyería con gemas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 23,  'slug' => Str::slug('Joyas de oro'), 'descripcion' => 'Joyas de oro','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 23,  'slug' => Str::slug('Aretes'), 'descripcion' => 'Aretes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 23,  'slug' => Str::slug('Anillos de compromiso'), 'descripcion' => 'Anillos de compromiso','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 23,  'slug' => Str::slug('Accesorios para el pelo'), 'descripcion' => 'Accesorios para el pelo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 24,  'slug' => Str::slug('Relojes mecánicos'), 'descripcion' => 'Relojes mecánicos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 24,  'slug' => Str::slug('Relojes digitales'), 'descripcion' => 'Relojes digitales','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 24,  'slug' => Str::slug('Relojes deportivos'), 'descripcion' => 'Relojes deportivos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 25,  'slug' => Str::slug('Relojes de pulsera'), 'descripcion' => 'Relojes de pulsera','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 25,  'slug' => Str::slug('Relojes deportivos'), 'descripcion' => 'Relojes deportivos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 25,  'slug' => Str::slug('Relojes mecánico'), 'descripcion' => 'Relojes mecánico','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 25,  'slug' => Str::slug('Relojes digitales'), 'descripcion' => 'Relojes digitales','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 26,  'slug' => Str::slug('Collares y colgantes'), 'descripcion' => 'Collares y colgantes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 26,  'slug' => Str::slug('anillos'), 'descripcion' => 'anillos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 26,  'slug' => Str::slug('pendientes'), 'descripcion' => 'pendientes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 26,  'slug' => Str::slug('Pulseras y brazaletes'), 'descripcion' => 'Pulseras y brazaletes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 26,  'slug' => Str::slug('Gemelos'), 'descripcion' => 'Gemelos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 27,  'slug' => Str::slug('artesanía'), 'descripcion' => 'artesanía','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 27,  'slug' => Str::slug('cuadros'), 'descripcion' => 'cuadros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 28,  'slug' => Str::slug('Collares para perro'), 'descripcion' => 'Collares para perro','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 28,  'slug' => Str::slug('Juguetes'), 'descripcion' => 'Juguetes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 28,  'slug' => Str::slug('Acuarios y tanques'), 'descripcion' => 'Acuarios y tanques','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 29,  'slug' => Str::slug('cojines'), 'descripcion' => 'cojines','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 29,  'slug' => Str::slug('cortinas'), 'descripcion' => 'cortinas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 29,  'slug' => Str::slug('Organizadores'), 'descripcion' => 'Organizadores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 29,  'slug' => Str::slug('productos de limpieza'), 'descripcion' => 'productos de limpieza','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 29,  'slug' => Str::slug('sabanas y cubrecamas'), 'descripcion' => 'sabanas y cubrecamas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 30,  'slug' => Str::slug('Muebles de oficina'), 'descripcion' => 'Muebles de oficina','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 30,  'slug' => Str::slug('Muebles para el hogar'), 'descripcion' => 'Muebles para el hogar','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 31,  'slug' => Str::slug('Utensilios del hogar'), 'descripcion' => 'Utensilios del hogar','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 31,  'slug' => Str::slug('Vasos, copas y tazas'), 'descripcion' => 'Vasos, copas y tazas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 31,  'slug' => Str::slug('Utensilios de cocina'), 'descripcion' => 'Utensilios de cocina','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 31,  'slug' => Str::slug('accesorios de cocina'), 'descripcion' => 'accesorios de cocina','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 32,  'slug' => Str::slug('neveras'), 'descripcion' => 'neveras','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 32,  'slug' => Str::slug('estufas'), 'descripcion' => 'estufas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 32,  'slug' => Str::slug('lavadoras'), 'descripcion' => 'lavadoras','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 32,  'slug' => Str::slug('licuadoras'), 'descripcion' => 'licuadoras','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subsubcategoria' => '', 'id_subcategoria' => 33,  'slug' => Str::slug('accesorios de jardineria'), 'descripcion' => 'accesorios de jardineria','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 33,  'slug' => Str::slug('Riego'), 'descripcion' => 'Riego','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 33,  'slug' => Str::slug('Macetas'), 'descripcion' => 'Macetas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 33,  'slug' => Str::slug('Muebles de exterior'), 'descripcion' => 'Muebles de exterior','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

             // Juguetes y ropas de bebe

            ['id_subsubcategoria' => '', 'id_subcategoria' => 34,  'slug' => Str::slug('Cochecitos'), 'descripcion' => 'Cochecitos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 34,  'slug' => Str::slug('cunas'), 'descripcion' => 'cunas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
                        
            ['id_subsubcategoria' => '', 'id_subcategoria' => 35,  'slug' => Str::slug('Calzado infantil'), 'descripcion' => 'Calzado infantil','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 35,  'slug' => Str::slug('Conjuntos de bebé'), 'descripcion' => 'Conjuntos de bebé','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 35,  'slug' => Str::slug('accesorios para bebé'), 'descripcion' => 'accesorios para bebé','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 35,  'slug' => Str::slug('sabanas'), 'descripcion' => 'sabanas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 35,  'slug' => Str::slug('Juguetes para bebé'), 'descripcion' => 'Juguetes para bebé','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subsubcategoria' => '', 'id_subcategoria' => 36,  'slug' => Str::slug('Vestidos'), 'descripcion' => 'Vestidos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 36,  'slug' => Str::slug('Conjuntos'), 'descripcion' => 'Conjuntos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 36,  'slug' => Str::slug('camisetas'), 'descripcion' => 'camisetas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 36,  'slug' => Str::slug('Chaquetas y abrigos'), 'descripcion' => 'Chaquetas y abrigos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 36,  'slug' => Str::slug('Pijamas y batas'), 'descripcion' => 'Pijamas y batas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subsubcategoria' => '', 'id_subcategoria' => 37,  'slug' => Str::slug('Chaquetas y abrigos'), 'descripcion' => 'Chaquetas y abrigos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 37,  'slug' => Str::slug('Conjuntos'), 'descripcion' => 'Conjuntos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 37,  'slug' => Str::slug('camisetas'), 'descripcion' => 'camisetas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 37,  'slug' => Str::slug('Chaquetas y abrigos'), 'descripcion' => 'Chaquetas y abrigos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 37,  'slug' => Str::slug('Pijamas y batas'), 'descripcion' => 'Pijamas y batas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 38,  'slug' => Str::slug('ropa para embarazadas'), 'descripcion' => 'ropa para embarazadas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 38,  'slug' => Str::slug('accesorios para embarazadas'), 'descripcion' => 'accesorios para embarazadas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 39,  'slug' => Str::slug('Bloques'), 'descripcion' => 'Bloques','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 39,  'slug' => Str::slug('Figuras de acción'), 'descripcion' => 'Figuras de acción','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 39,  'slug' => Str::slug('Muñecas'), 'descripcion' => 'Muñecas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 39,  'slug' => Str::slug('Peluches'), 'descripcion' => 'Peluches','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 39,  'slug' => Str::slug('Pegatinas'), 'descripcion' => 'Pegatinas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 39,  'slug' => Str::slug('helicopteros y Coches de control remoto'), 'descripcion' => 'helicopteros y Coches de control remoto','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // deporte
            ['id_subsubcategoria' => '', 'id_subcategoria' => 40,  'slug' => Str::slug('Natación'), 'descripcion' => 'Natación','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 40,  'slug' => Str::slug('Trajes de baño'), 'descripcion' => 'Trajes de baño','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 40,  'slug' => Str::slug('Conjuntos de baño'), 'descripcion' => 'Conjuntos de baño','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 40,  'slug' => Str::slug('Vestidos de playa'), 'descripcion' => 'Vestidos de playa','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 40,  'slug' => Str::slug('Bañadores de hombre'), 'descripcion' => 'Bañadores de hombre','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 40,  'slug' => Str::slug('Bañadores infantiles'), 'descripcion' => 'Bañadores infantiles','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 41,  'slug' => Str::slug('Bicicletas'), 'descripcion' => 'Bicicletas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 41,  'slug' => Str::slug('Cuadros de bicicleta'), 'descripcion' => 'Cuadros de bicicleta','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 41,  'slug' => Str::slug('Luces de bicicleta'), 'descripcion' => 'Luces de bicicleta','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 41,  'slug' => Str::slug('Cascos de bicicleta'), 'descripcion' => 'Cascos de bicicleta','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 41,  'slug' => Str::slug('ropa de ciclismo'), 'descripcion' => 'ropa de ciclismo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 41,  'slug' => Str::slug('Gafas de ciclismo'), 'descripcion' => 'Gafas de ciclismo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 42,  'slug' => Str::slug('zapatillas y tenis de correr'), 'descripcion' => 'zapatillas y tenis de correr','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 42,  'slug' => Str::slug('zapatillas y tenis de futbol'), 'descripcion' => 'zapatillas y tenis de futbol','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 42,  'slug' => Str::slug('zapatillas y tenis de skateboard'), 'descripcion' => 'zapatillas y tenis de skateboard','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 42,  'slug' => Str::slug('zapatillas y tenis de baloncesto'), 'descripcion' => 'zapatillas y tenis de baloncesto','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 43,  'slug' => Str::slug('Carretes de pesca'), 'descripcion' => 'Carretes de pesca','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 43,  'slug' => Str::slug('Cebos de pesca'), 'descripcion' => 'Cebos de pesca','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 43,  'slug' => Str::slug('Cañas de pescar'), 'descripcion' => 'Cañas de pescar','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 43,  'slug' => Str::slug('Cajas de pesca'), 'descripcion' => 'Cajas de pesca','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 43,  'slug' => Str::slug('ropa de pesca'), 'descripcion' => 'ropa de pesca','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 44,  'slug' => Str::slug('Camisetas'), 'descripcion' => 'Camisetas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 44,  'slug' => Str::slug('Chaquetas'), 'descripcion' => 'Chaquetas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 44,  'slug' => Str::slug('Pantalones'), 'descripcion' => 'Pantalones','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 44,  'slug' => Str::slug('Accesorios deportivos'), 'descripcion' => 'Accesorios deportivos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 45,  'slug' => Str::slug('Camping y senderismo'), 'descripcion' => 'Camping y senderismo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 45,  'slug' => Str::slug('Caza'), 'descripcion' => 'Caza','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 45,  'slug' => Str::slug('Golf'), 'descripcion' => 'Golf','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 45,  'slug' => Str::slug('Fitness y bodybuilding'), 'descripcion' => 'Fitness y bodybuilding','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 45,  'slug' => Str::slug('Instrumentos musicales'), 'descripcion' => 'Instrumentos musicales','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // salud y belleza
            ['id_subsubcategoria' => '', 'id_subcategoria' => 46,  'slug' => Str::slug('Extensiones de pelo'), 'descripcion' => 'Extensiones de pelo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 46,  'slug' => Str::slug('Pelucas'), 'descripcion' => 'Pelucas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 46,  'slug' => Str::slug('Cierres'), 'descripcion' => 'Cierres','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subsubcategoria' => '', 'id_subcategoria' => 47,  'slug' => Str::slug('para Ojos'), 'descripcion' => 'para Ojos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 47,  'slug' => Str::slug('para Labios'), 'descripcion' => 'para Labios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 47,  'slug' => Str::slug('para Cara'), 'descripcion' => 'para Cara','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 47,  'slug' => Str::slug('Utensilios de maquillaje'), 'descripcion' => 'Utensilios de maquillaje','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 48,  'slug' => Str::slug('Masaje y relajacion'), 'descripcion' => 'Masaje y relajacion','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 48,  'slug' => Str::slug('Cuidado personal'), 'descripcion' => 'Cuidado personal','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 49,  'slug' => Str::slug('Cara'), 'descripcion' => 'Cara','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 49,  'slug' => Str::slug('Cuerpo'), 'descripcion' => 'Cuerpo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 49,  'slug' => Str::slug('utensilios '), 'descripcion' => 'utensilios ','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 50,  'slug' => Str::slug('Esmalte de gel para uñas '), 'descripcion' => 'Esmalte de gel para uñas ','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 50,  'slug' => Str::slug('Pulidoras de uñas '), 'descripcion' => 'Pulidoras de uñas ','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 50,  'slug' => Str::slug('Lámparas de secado para uñas '), 'descripcion' => 'Lámparas de secado para uñas ','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 50,  'slug' => Str::slug('Brillantina para uñas '), 'descripcion' => 'Brillantina para uñas ','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 51,  'slug' => Str::slug('Peluquería '), 'descripcion' => 'Peluquería ','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 51,  'slug' => Str::slug('Afeitado y depilación'), 'descripcion' => 'Afeitado y depilación','usuario_creador' => 'movilsoluciones','estado' => 'activo'],            
            ['id_subsubcategoria' => '', 'id_subcategoria' => 51,  'slug' => Str::slug('articulos higiene personal'), 'descripcion' => 'articulos higiene personal','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 52,  'slug' => Str::slug('Lubricantes'), 'descripcion' => 'Lubricantes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 52,  'slug' => Str::slug('Condones'), 'descripcion' => 'Condones','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 52,  'slug' => Str::slug('Vibradores'), 'descripcion' => 'Vibradores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 52,  'slug' => Str::slug('juegos de rol'), 'descripcion' => 'juegos de rol','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 53,  'slug' => Str::slug('Luces para coche'), 'descripcion' => 'Luces para coche','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 53,  'slug' => Str::slug('Piezas para el interior'), 'descripcion' => 'Piezas para el interior','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 53,  'slug' => Str::slug('Piezas para el exterior'), 'descripcion' => 'Piezas para el exterior','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 53,  'slug' => Str::slug('Sensores para vehículos'), 'descripcion' => 'Sensores para vehículos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 53,  'slug' => Str::slug('otros'), 'descripcion' => 'otros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 54,  'slug' => Str::slug('Herramientas de diagnóstico'), 'descripcion' => 'Herramientas de diagnóstico','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 54,  'slug' => Str::slug('Utensilios de limpieza'), 'descripcion' => 'Utensilios de limpieza','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 54,  'slug' => Str::slug('Tratamiento de pintura'), 'descripcion' => 'Tratamiento de pintura','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 54,  'slug' => Str::slug('Lubricantes'), 'descripcion' => 'Lubricantes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 54,  'slug' => Str::slug('Lubricantes'), 'descripcion' => 'Lubricantes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 54,  'slug' => Str::slug('otros'), 'descripcion' => 'otros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 55,  'slug' => Str::slug('Reproductores multimedia'), 'descripcion' => 'Reproductores multimedia','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 55,  'slug' => Str::slug('Sistemas de seguridad y alarmas'), 'descripcion' => 'Sistemas de seguridad y alarmas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 55,  'slug' => Str::slug('GPS'), 'descripcion' => 'GPS','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 55,  'slug' => Str::slug('Monitores para coche'), 'descripcion' => 'Monitores para coche','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 55,  'slug' => Str::slug('Cámaras para coche'), 'descripcion' => 'Cámaras para coche','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 55,  'slug' => Str::slug('Baterías de arranque'), 'descripcion' => 'Baterías de arranque','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 56,  'slug' => Str::slug('Pegatinas para coche'), 'descripcion' => 'Pegatinas para coche','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 56,  'slug' => Str::slug('forros para coches'), 'descripcion' => 'forros para coches','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 56,  'slug' => Str::slug('otros'), 'descripcion' => 'otros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 57,  'slug' => Str::slug('Piezas'), 'descripcion' => 'Piezas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 57,  'slug' => Str::slug('Cascos y protección'), 'descripcion' => 'Cascos y protección','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 57,  'slug' => Str::slug('Iluminación'), 'descripcion' => 'Iluminación','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 57,  'slug' => Str::slug('accesorios'), 'descripcion' => 'accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 58,  'slug' => Str::slug('Cubiertas para asientos'), 'descripcion' => 'Cubiertas para asientos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 58,  'slug' => Str::slug('Llaveros'), 'descripcion' => 'Llaveros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 58,  'slug' => Str::slug('forros para volantes'), 'descripcion' => 'forros para volantes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 58,  'slug' => Str::slug('Alfombras'), 'descripcion' => 'Alfombras','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 58,  'slug' => Str::slug('ambientadores'), 'descripcion' => 'ambientadores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 59,  'slug' => Str::slug('Herramientas de medición y análisis'), 'descripcion' => 'Herramientas de medición y análisis','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 59,  'slug' => Str::slug('Herramientas manuales'), 'descripcion' => 'Herramientas manuales','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 59,  'slug' => Str::slug('Herramientas eléctricas'), 'descripcion' => 'Herramientas eléctricas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 59,  'slug' => Str::slug('Herramientas de jardinería'), 'descripcion' => 'Herramientas de jardinería','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 59,  'slug' => Str::slug('Juegos de herramientas'), 'descripcion' => 'Juegos de herramientas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 59,  'slug' => Str::slug('Equipos para soldar'), 'descripcion' => 'Equipos para soldar','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 59,  'slug' => Str::slug('Utensilios para soldar'), 'descripcion' => 'Utensilios para soldar','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 59,  'slug' => Str::slug('Herramientas y accesorios para máquinas'), 'descripcion' => 'Herramientas y accesorios para máquinas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 59,  'slug' => Str::slug('Carpintería'), 'descripcion' => 'Carpintería','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 59,  'slug' => Str::slug('Almacenamiento'), 'descripcion' => 'Almacenamiento','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 60,  'slug' => Str::slug('Luces de techo'), 'descripcion' => 'Luces de techo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 60,  'slug' => Str::slug('Lámparas colgantes'), 'descripcion' => 'Lámparas colgantes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 60,  'slug' => Str::slug('Luces empotradas'), 'descripcion' => 'Luces empotradas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 60,  'slug' => Str::slug('Candelabros'), 'descripcion' => 'Candelabros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 60,  'slug' => Str::slug('Lámparas de pared'), 'descripcion' => 'Lámparas de pared','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 60,  'slug' => Str::slug('Lámparas de noche'), 'descripcion' => 'Lámparas de noche','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 60,  'slug' => Str::slug('LEDs'), 'descripcion' => 'LEDs','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 60,  'slug' => Str::slug('Linternas'), 'descripcion' => 'Linternas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 60,  'slug' => Str::slug('Lámparas solares'), 'descripcion' => 'Lámparas solares','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 61,  'slug' => Str::slug('Accesorios y equipos eléctricos'), 'descripcion' => 'Accesorios y equipos eléctricos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 61,  'slug' => Str::slug('Interruptores de pared'), 'descripcion' => 'Interruptores de pared','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 61,  'slug' => Str::slug('plomeria'), 'descripcion' => 'plomeria','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 61,  'slug' => Str::slug('cocina y accesorios'), 'descripcion' => 'cocina y accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 62,  'slug' => Str::slug('carteras de mano'), 'descripcion' => 'carteras de mano','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subsubcategoria' => '', 'id_subcategoria' => 62,  'slug' => Str::slug('carteras elegantes'), 'descripcion' => 'carteras elegantes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 63,  'slug' => Str::slug('zapatos de salir'), 'descripcion' => 'zapatos de salir','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subsubcategoria' => '', 'id_subcategoria' => 64,  'slug' => Str::slug('carteras para hombre'), 'descripcion' => 'carteras para hombre','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subsubcategoria' => '', 'id_subcategoria' => 65,  'slug' => Str::slug('zapatos de vestir'), 'descripcion' => 'zapatos de vestir','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
        );
        
        $i=0;

        foreach ($data as $key => $value) {
            $value['id_subsubcategoria'] = $i+1;
            SubSubCategoria::create($value);  
            $i++;
        }
    }
}
