<?php

use Illuminate\Database\Seeder;
use App\Librerias\globales\pais;

class PaisesSeeder extends Seeder
{
    public function run()
    {
        $paises = array(
            'descripcion' => 'Republica Dominicana',
            'gentilicio'  => 'dominicano/a',
            'latitud' => '18.40',
            'longitud' => '40.56',
            'estado' => 'activo',
            'id_pais' => '1',
            'usuario_creador' => 'movilsoluciones',
            'usuario_modificador' => ''
        );

        pais::create($paises);
    }
}
