<?php

use Illuminate\Database\Seeder;
use App\Librerias\inventario\Bodegas;

class BodegasSeeder extends Seeder
{    
    public function run()
    {
        $bodegas = array('id_bodega' => 1,
                         'descripcion' => 'almacen general',
                         'id_pais'=> 1,
                         'id_ciudad'=> 1,
                         'usuario_creador' => 'movilsoluciones',
                         'estado' => 'activo'
        );

        Bodegas::create($bodegas); 
    }
}
