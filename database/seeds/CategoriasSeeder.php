<?php

use Illuminate\Database\Seeder;
use App\Librerias\CategoriasModel;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        $servicio = array('id_categoria' => 1,
                          'descripcion' => 'servicio',
                          'usuario_creador' => 'movilsoluciones',
                          'estado' => 'inactivo'
        );

        $digital = array('id_categoria' => 2,
                         'descripcion' => 'digital',
                         'usuario_creador' => 'movilsoluciones',
                         'estado' => 'inactivo'
        );

        CategoriasModel::create($servicio);  
        CategoriasModel::create($digital);  
    }
}
