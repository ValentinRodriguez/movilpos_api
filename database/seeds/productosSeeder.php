<?php

use Illuminate\Database\Seeder;
use App\Librerias\inventario\InvProductos;

class productosSeeder extends Seeder
{
    public function run()
    {
        $count = 200;

        
        for ($i=0; $i < $count; $i++) { 
            $codigo = 1332 + $i;
            $productos = array(
                'titulo' => 'testfgfgfgfg','tipo_producto' => 1,'id_tipoinventario' => 1,'id_categoria' => 3,'id_brand' => 3,'descripcion' => 'testfgfgfgfg',
                'chasis' => '5TDZK3EH9AS004144','motor' => '3.5L V6 SFI','fabricacion' => 2018,'asientos' => 1,'id_propiedad' => 3,'codigo' => $codigo,
                'codigo_referencia' => 546925,'origen' => 'importado','existenciaMinima' => 1 ,'controlDeExistencias' => 'si','descuento' => 'si','id_bodega' => 1,
                'controlItbis' => 'si','precio_compra' => 80,'precio_venta' => 500,'costo' => 100,'galeriaImagenes' => 'uploads/productos/612652b8f16f6.jpg',
                'editando' => 0,'estado' => 'activo','usuario_creador' => 'movilsoluciones'
    
            );
            InvProductos::create($productos);
        }
    }
}
