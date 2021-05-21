<?php

use Illuminate\Database\Seeder;
use App\Librerias\regiones;

class regionSeeder extends Seeder
{
    public function run()
    {
        $regiones = array(
            ['id_pais' => 1, 'id_region' => 2, 'descripcion' =>	'SUR', 'estado' => 'activo'],
            ['id_pais' => 1, 'id_region' => 1, 'descripcion' =>	'CIBAO', 'estado' => 'activo'],
            ['id_pais' => 1, 'id_region' => 3, 'descripcion' =>	'ORIENTAL', 'estado' => 'activo']
        );

        foreach ($regiones as $key => $value) {
            regiones::create($value);
        }
    }
}
