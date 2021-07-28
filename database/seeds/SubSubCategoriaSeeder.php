<?php

use Illuminate\Database\Seeder;
use App\Librerias\SubSubCategoria;
class SubSubCategoriaSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            //ROPA MUJER
            ['id_subcategoria' => 1, 'descripcion' => 'Vestidos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 1, 'descripcion' => 'Camisetas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 1, 'descripcion' => 'Blusas y camisas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 1, 'descripcion' => 'Sudaderas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 1, 'descripcion' => 'Conjuntos de mujer','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 1, 'descripcion' => 'Trajes y blazers','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 1, 'descripcion' => 'Bodies','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 1, 'descripcion' => 'Tops','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 1, 'descripcion' => 'Abrigos y chaquetas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 1, 'descripcion' => 'Jerséis','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 1, 'descripcion' => 'Leggings','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 1, 'descripcion' => 'Faldas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 1, 'descripcion' => 'Jeans','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 1, 'descripcion' => 'Capris','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 1, 'descripcion' => 'Disfraces','usuario_creador' => 'movilsoluciones','estado' => 'activo'], 

            ['id_subcategoria' => 2, 'descripcion' => 'Bañadores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 2, 'descripcion' => 'Bikinis','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 2, 'descripcion' => 'Vestidos de playa','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subcategoria' => 3, 'descripcion' => 'Conjuntos de pijama','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 3, 'descripcion' => 'Panties','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 3, 'descripcion' => 'Brasier','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 3, 'descripcion' => 'Panties y Brasier','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 3, 'descripcion' => 'Medias','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 3, 'descripcion' => 'Prendas moldeadoras','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
        
            ['id_subcategoria' => 4, 'descripcion' => 'accesorios para el pelo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 4, 'descripcion' => 'Gafas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 4, 'descripcion' => 'Gorras','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 4, 'descripcion' => 'Sombreros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 4, 'descripcion' => 'Cinturones','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // ROPA HOMBRE
            ['id_subcategoria' => 5, 'descripcion' => 'Sudaderas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 5, 'descripcion' => 'Camisas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 5, 'descripcion' => 'Pantalones','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 5, 'descripcion' => 'Chaquetas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 5, 'descripcion' => 'Suéteres','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 5, 'descripcion' => 'Trajes y blazers','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
                        
            ['id_subcategoria' => 6, 'descripcion' => 'Boxers','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 6, 'descripcion' => 'Calzoncillos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 6, 'descripcion' => 'Pijamas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],    
            
            ['id_subcategoria' => 7, 'descripcion' => 'Bufandas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 7, 'descripcion' => 'Gorras, Sombreros y boinas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // Celulares y Tabletas
            ['id_subcategoria' => 8, 'descripcion' => 'iPhones','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 8, 'descripcion' => 'HUAWEI','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 8, 'descripcion' => 'Samsung','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 8, 'descripcion' => 'Otros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subcategoria' => 9, 'descripcion' => 'Forros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 9, 'descripcion' => 'Cables','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 9, 'descripcion' => 'Cargadores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 9, 'descripcion' => 'Batería portátil','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 9, 'descripcion' => 'Soportes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 9, 'descripcion' => 'Protectores de pantalla','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 9, 'descripcion' => 'Cargadores inalámbricos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 9, 'descripcion' => 'Cargadores para coche','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 9, 'descripcion' => 'Adaptadores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subcategoria' => 10, 'descripcion' => 'Pantallas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 10, 'descripcion' => 'Baterias','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 10, 'descripcion' => 'Carcasas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 11, 'descripcion' => 'Walkie Talkie','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 11, 'descripcion' => 'Otros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // Computadoras
            ['id_subcategoria' => 12, 'descripcion' => 'Procesadores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 12, 'descripcion' => 'Placas base','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 12, 'descripcion' => 'Tarjetas gráficas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 12, 'descripcion' => 'Ratones','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 12, 'descripcion' => 'Teclados','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subcategoria' => 13, 'descripcion' => 'Laptops','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 13, 'descripcion' => 'Accesorios para portátiles','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 14, 'descripcion' => 'Camaras de Vigilancia','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 14, 'descripcion' => 'Control de accesos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 14, 'descripcion' => 'Detectores de humo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 14, 'descripcion' => 'Equipos de protección y seguridad','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 14, 'descripcion' => 'Alarmas y sensores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 14, 'descripcion' => 'Intercoms','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 15, 'descripcion' => 'Memorias USB','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 15, 'descripcion' => 'Discos duros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 15, 'descripcion' => 'discos duros externos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 16, 'descripcion' => 'Impresoras 3D y accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 16, 'descripcion' => 'Impresoras y accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 16, 'descripcion' => 'Escáneres','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 17, 'descripcion' => 'Routers inalámbricos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 17, 'descripcion' => 'Tarjetas de red','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 17, 'descripcion' => 'equipos de redes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            // Electrónica
            ['id_subcategoria' => 18, 'descripcion' => 'Cables y adaptadores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 18, 'descripcion' => 'Cigarrillos electrónicos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 18, 'descripcion' => 'Cargadores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 18, 'descripcion' => 'Electrónica casera','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 19, 'descripcion' => 'Televisores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 19, 'descripcion' => 'Proyectores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 19, 'descripcion' => 'Sticks TV','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 19, 'descripcion' => 'Auriculares','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 19, 'descripcion' => 'Altavoces','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 19, 'descripcion' => 'Reproductores MP3','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 19, 'descripcion' => 'Micrófonos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 19, 'descripcion' => 'Dispositivos RV y AR','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 20, 'descripcion' => 'Cámaras digitales','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 20, 'descripcion' => 'Cámaras de vídeo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 20, 'descripcion' => 'Drones con cámara','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 20, 'descripcion' => 'Cámaras de acción','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 20, 'descripcion' => 'accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subcategoria' => 21, 'descripcion' => 'Dispositivos inteligentes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 21, 'descripcion' => 'Electrodomésticos inteligentes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 21, 'descripcion' => 'Accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 21, 'descripcion' => 'Mandos a distancia','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 21, 'descripcion' => 'Smartwatches','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 21, 'descripcion' => 'Smartbands','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 22, 'descripcion' => 'consolas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 22, 'descripcion' => 'Gamepads','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 22, 'descripcion' => 'Joysticks','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 23, 'descripcion' => 'Joyas de plata 925','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 23, 'descripcion' => 'Joyas de diamantes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 23, 'descripcion' => 'Joyería de perlas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 23, 'descripcion' => 'Joyería con gemas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 23, 'descripcion' => 'Joyas de oro','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 23, 'descripcion' => 'Aretes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 23, 'descripcion' => 'Anillos de compromiso','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 23, 'descripcion' => 'Accesorios para el pelo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 24, 'descripcion' => 'Relojes mecánicos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 24, 'descripcion' => 'Relojes digitales','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 24, 'descripcion' => 'Relojes deportivos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 25, 'descripcion' => 'Relojes de pulsera','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 25, 'descripcion' => 'Relojes deportivos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 25, 'descripcion' => 'Relojes mecánico','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 25, 'descripcion' => 'Relojes digitales','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 26, 'descripcion' => 'Collares y colgantes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 26, 'descripcion' => 'anillos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 26, 'descripcion' => 'pendientes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 26, 'descripcion' => 'Pulseras y brazaletes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 26, 'descripcion' => 'Gemelos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 27, 'descripcion' => 'artesanía','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 27, 'descripcion' => 'cuadros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 28, 'descripcion' => 'Collares para perro','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 28, 'descripcion' => 'Juguetes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 28, 'descripcion' => 'Acuarios y tanques','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 29, 'descripcion' => 'cojines','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 29, 'descripcion' => 'cortinas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 29, 'descripcion' => 'Organizadores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 29, 'descripcion' => 'productos de limpieza','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 29, 'descripcion' => 'sabanas y cubrecamas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 30, 'descripcion' => 'Muebles de oficina','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 30, 'descripcion' => 'Muebles para el hogar','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 31, 'descripcion' => 'Utensilios del hogar','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 31, 'descripcion' => 'Vasos, copas y tazas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 31, 'descripcion' => 'Utensilios de cocina','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 31, 'descripcion' => 'accesorios de cocina','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 32, 'descripcion' => 'neveras','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 32, 'descripcion' => 'estufas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 32, 'descripcion' => 'lavadoras','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 32, 'descripcion' => 'licuadoras','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subcategoria' => 33, 'descripcion' => 'accesorios de jardineria','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 33, 'descripcion' => 'Riego','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 33, 'descripcion' => 'Macetas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 33, 'descripcion' => 'Muebles de exterior','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

             // Juguetes y ropas de bebe

            ['id_subcategoria' => 34, 'descripcion' => 'Cochecitos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 34, 'descripcion' => 'cunas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
                        
            ['id_subcategoria' => 35, 'descripcion' => 'Calzado infantil','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 35, 'descripcion' => 'Conjuntos de bebé','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 35, 'descripcion' => 'accesorios para bebé','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 35, 'descripcion' => 'sabanas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 35, 'descripcion' => 'Juguetes para bebé','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subcategoria' => 36, 'descripcion' => 'Vestidos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 36, 'descripcion' => 'Conjuntos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 36, 'descripcion' => 'camisetas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 36, 'descripcion' => 'Chaquetas y abrigos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 36, 'descripcion' => 'Pijamas y batas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subcategoria' => 37, 'descripcion' => 'Chaquetas y abrigos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 37, 'descripcion' => 'Conjuntos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 37, 'descripcion' => 'camisetas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 37, 'descripcion' => 'Chaquetas y abrigos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 37, 'descripcion' => 'Pijamas y batas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 38, 'descripcion' => 'ropa para embarazadas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 38, 'descripcion' => 'accesorios para embarazadas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 39, 'descripcion' => 'Bloques','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 39, 'descripcion' => 'Figuras de acción','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 39, 'descripcion' => 'Muñecas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 39, 'descripcion' => 'Peluches','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 39, 'descripcion' => 'Pegatinas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 39, 'descripcion' => 'helicopteros y Coches de control remoto','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // deporte
            ['id_subcategoria' => 40, 'descripcion' => 'Natación','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 40, 'descripcion' => 'Trajes de baño','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 40, 'descripcion' => 'Conjuntos de baño','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 40, 'descripcion' => 'Vestidos de playa','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 40, 'descripcion' => 'Bañadores de hombre','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 40, 'descripcion' => 'Bañadores infantiles','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 41, 'descripcion' => 'Bicicletas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 41, 'descripcion' => 'Cuadros de bicicleta','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 41, 'descripcion' => 'Luces de bicicleta','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 41, 'descripcion' => 'Cascos de bicicleta','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 41, 'descripcion' => 'ropa de ciclismo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 41, 'descripcion' => 'Gafas de ciclismo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 42, 'descripcion' => 'zapatillas y tenis de correr','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 42, 'descripcion' => 'zapatillas y tenis de futbol','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 42, 'descripcion' => 'zapatillas y tenis de skateboard','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 42, 'descripcion' => 'zapatillas y tenis de baloncesto','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 43, 'descripcion' => 'Carretes de pesca','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 43, 'descripcion' => 'Cebos de pesca','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 43, 'descripcion' => 'Cañas de pescar','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 43, 'descripcion' => 'Cajas de pesca','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 43, 'descripcion' => 'ropa de pesca','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 44, 'descripcion' => 'Camisetas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 44, 'descripcion' => 'Chaquetas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 44, 'descripcion' => 'Pantalones','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 44, 'descripcion' => 'Accesorios deportivos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 45, 'descripcion' => 'Camping y senderismo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 45, 'descripcion' => 'Caza','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 45, 'descripcion' => 'Golf','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 45, 'descripcion' => 'Fitness y bodybuilding','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 45, 'descripcion' => 'Instrumentos musicales','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            // salud y belleza
            ['id_subcategoria' => 46, 'descripcion' => 'Extensiones de pelo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 46, 'descripcion' => 'Pelucas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 46, 'descripcion' => 'Cierres','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            
            ['id_subcategoria' => 47, 'descripcion' => 'para Ojos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 47, 'descripcion' => 'para Labios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 47, 'descripcion' => 'para Cara','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 47, 'descripcion' => 'Utensilios de maquillaje','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 48, 'descripcion' => 'Masaje y relajacion','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 48, 'descripcion' => 'Cuidado personal','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 49, 'descripcion' => 'Cara','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 49, 'descripcion' => 'Cuerpo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 49, 'descripcion' => 'utensilios ','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 50, 'descripcion' => 'Esmalte de gel para uñas ','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 50, 'descripcion' => 'Pulidoras de uñas ','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 50, 'descripcion' => 'Lámparas de secado para uñas ','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 50, 'descripcion' => 'Brillantina para uñas ','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 51, 'descripcion' => 'Peluquería ','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 51, 'descripcion' => 'Afeitado y depilación','usuario_creador' => 'movilsoluciones','estado' => 'activo'],            
            ['id_subcategoria' => 51, 'descripcion' => 'articulos higiene personal','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 52, 'descripcion' => 'Lubricantes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 52, 'descripcion' => 'Condones','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 52, 'descripcion' => 'Vibradores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 52, 'descripcion' => 'juegos de rol','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 53, 'descripcion' => 'Luces para coche','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 53, 'descripcion' => 'Piezas para el interior','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 53, 'descripcion' => 'Piezas para el exterior','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 53, 'descripcion' => 'Sensores para vehículos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 53, 'descripcion' => 'otros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 54, 'descripcion' => 'Herramientas de diagnóstico','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 54, 'descripcion' => 'Utensilios de limpieza','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 54, 'descripcion' => 'Tratamiento de pintura','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 54, 'descripcion' => 'Lubricantes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 54, 'descripcion' => 'Lubricantes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 54, 'descripcion' => 'otros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 55, 'descripcion' => 'Reproductores multimedia','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 55, 'descripcion' => 'Sistemas de seguridad y alarmas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 55, 'descripcion' => 'GPS','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 55, 'descripcion' => 'Monitores para coche','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 55, 'descripcion' => 'Cámaras para coche','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 55, 'descripcion' => 'Baterías de arranque','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 56, 'descripcion' => 'Pegatinas para coche','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 56, 'descripcion' => 'forros para coches','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 56, 'descripcion' => 'otros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 57, 'descripcion' => 'Piezas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 57, 'descripcion' => 'Cascos y protección','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 57, 'descripcion' => 'Iluminación','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 57, 'descripcion' => 'accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 58, 'descripcion' => 'Cubiertas para asientos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 58, 'descripcion' => 'Llaveros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 58, 'descripcion' => 'forros para volantes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 58, 'descripcion' => 'Alfombras','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 58, 'descripcion' => 'ambientadores','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 59, 'descripcion' => 'Herramientas de medición y análisis','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 59, 'descripcion' => 'Herramientas manuales','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 59, 'descripcion' => 'Herramientas eléctricas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 59, 'descripcion' => 'Herramientas de jardinería','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 59, 'descripcion' => 'Juegos de herramientas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 59, 'descripcion' => 'Equipos para soldar','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 59, 'descripcion' => 'Utensilios para soldar','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 59, 'descripcion' => 'Herramientas y accesorios para máquinas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 59, 'descripcion' => 'Carpintería','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 59, 'descripcion' => 'Almacenamiento','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 60, 'descripcion' => 'Luces de techo','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 60, 'descripcion' => 'Lámparas colgantes','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 60, 'descripcion' => 'Luces empotradas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 60, 'descripcion' => 'Candelabros','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 60, 'descripcion' => 'Lámparas de pared','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 60, 'descripcion' => 'Lámparas de noche','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 60, 'descripcion' => 'LEDs','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 60, 'descripcion' => 'Linternas','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 60, 'descripcion' => 'Lámparas solares','usuario_creador' => 'movilsoluciones','estado' => 'activo'],

            ['id_subcategoria' => 61, 'descripcion' => 'Accesorios y equipos eléctricos','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 61, 'descripcion' => 'Interruptores de pared','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 61, 'descripcion' => 'plomeria','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_subcategoria' => 61, 'descripcion' => 'cocina y accesorios','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
        );
    }
}
