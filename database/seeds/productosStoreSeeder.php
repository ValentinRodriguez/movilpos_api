<?php

use Illuminate\Database\Seeder;
use App\Librerias\tienda\invProductoStore;

class productosStoreSeeder extends Seeder
{
    public function run()
    {
        $count = 100;
        $producto = invProductoStore::get();
        $producto[0]['galeriaImagenes'];
        // Log::debug($galeria[0]['galeriaImagenes']);
        for ($i=0; $i < $count; $i++) {             
            $productos = array(
                "cantidadLim" => NULL,
                "categoria" => 1,
                "descripcion" => 'sadgfdsfasfsadf'.$i,
                "documentosDigitales" => NULL,
                "fechaLimDescarga" => NULL,
                "fecha_rebaja" => NULL,
                "limDescargas" => NULL,
                "precio" => rand(100,10000),
                "precio_rebajado" => NULL,
                "stock" => rand(1,50),
                "tipo" => 'basico',
                "titulo" => 'asdads'.$i,
                "codigo" => 'sdfdsfdsf'.$i,
                "atributos" => '{"talla":"","actividad":"","estado":"n","material":"","edad":""}',
                "galeriaImagenes" => '["uploads\/tienda\/imagenes\/1630785064-6133ce285e075.jpg","uploads\/tienda\/imagenes\/1630785064-6133ce2860e8e.PNG","uploads\/tienda\/imagenes\/1630785064-6133ce28618ce.jpg","uploads\/tienda\/imagenes\/1630785064-6133ce28627de.jpg","uploads\/tienda\/imagenes\/1630785064-6133ce2866958.jpg"]',
                "rating" => rand(1,5)
            );
            invProductoStore::create($productos);
        }
    
    }
}
