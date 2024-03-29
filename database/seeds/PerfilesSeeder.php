<?php

use Illuminate\Database\Seeder;
use App\Librerias\usuarios\Perfiles;

class PerfilesSeeder extends Seeder
{
    public function run()
    {
        $perfil = array('descripcion' => 'tecnologia',
                        'usuario_creador' => 'movilsoluciones',
                        'estado' => 'activo'
        );

        $perfil2 = array('descripcion' => 'gerente contabilidad',
                        'usuario_creador' => 'movilsoluciones',
                        'estado' => 'activo'
        );

        Perfiles::create($perfil);
        Perfiles::create($perfil2);
    }
}
