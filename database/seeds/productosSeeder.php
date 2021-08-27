<?php

use Illuminate\Database\Seeder;
use App\Librerias\inventario\InvProductos;
use Illuminate\Support\Facades\Log;

class productosSeeder extends Seeder
{
    public function run()
    {
        $count = 200;
        $galeria = InvProductos::get();
        $galeria[0]['galeriaImagenes'];
        // Log::debug($galeria[0]['galeriaImagenes']);
        for ($i=0; $i < $count; $i++) { 
            $codigo = 1332 + $i;
            $productos = array(
                'titulo' => 'testfgfgfgfg','tipo_producto' => 1,'id_tipoinventario' => 1,
                'id_categoria' => rand(3,6),'id_brand' => rand(3,6),'descripcion' => 'testfgfgfgfg',
                'chasis' => '5TDZK3EH9AS004144','motor' => '3.5L V6 SFI','fabricacion' => 2018,
                'asientos' => 1,'id_propiedad' => rand(3,6),'codigo' => $codigo,
                'codigo_referencia' => 546925,'origen' => 'importado','existenciaMinima' => 1 ,
                'controlDeExistencias' => 'si','descuento' => 'si','id_bodega' => 1,
                'controlItbis' => 'si','precio_compra' => 80,'precio_venta' => 500,'costo' => 100,
                'galeriaImagenes' => $galeria[0]['galeriaImagenes'],
                'editando' => 0,'estado' => 'activo','usuario_creador' => 'movilsoluciones'
            );
            InvProductos::create($productos);
        }
    }
}
