<?php

use Illuminate\Database\Seeder;
use App\Librerias\BrandsModel;

class marcasSeeder extends Seeder
{
    public function run()
    {
        $servicio = array('id_brand' => 1,
                          'descripcion' => 'servicio',
                          'usuario_creador' => 'movilsoluciones',
                          'estado' => 'inactivo',
        );

        $digital = array('id_brand' => 2,
                         'descripcion' => 'digital',
                         'usuario_creador' => 'movilsoluciones',
                         'estado' => 'inactivo',
        );

        BrandsModel::create($servicio); 
        BrandsModel::create($digital); 
    }
}
