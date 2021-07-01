<?php

use Illuminate\Database\Seeder;
use App\Librerias\areasEmpresa;

class areasSeeder extends Seeder
{
    public function run()
    {
        $areas = array(
            ['descripcion' => 'caja principal',
            'cod_cia' => 1,
            'suc_id' => 1,
            'depto' => 1,
            'estado' => 'activo',
            'usuario_creador' => 'movilsoluciones'
            ]
        );
         
        foreach ($areas as $key => $value) {
            areasEmpresa::create($value);
        }
    }
}
