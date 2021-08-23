<?php

use Illuminate\Database\Seeder;
use App\Librerias\globales\regiones;

class regionSeeder extends Seeder
{
    public function run()
    {
        $regiones = array(
            ['id_pais' => 1, 'id_region' => 1, 'descripcion' =>	'CIBAO NORTE', 'estado' => 'activo'],
            ['id_pais' => 1, 'id_region' => 2, 'descripcion' =>	'CIBAO SUR', 'estado' => 'activo'],
            ['id_pais' => 1, 'id_region' => 3, 'descripcion' =>	'CIBAO NORDESTE', 'estado' => 'activo'],
            ['id_pais' => 1, 'id_region' => 4, 'descripcion' =>	'CIBAO NOROESTE', 'estado' => 'activo'],
            ['id_pais' => 1, 'id_region' => 5, 'descripcion' =>	'VALDESIA', 'estado' => 'activo'],
            ['id_pais' => 1, 'id_region' => 6, 'descripcion' =>	'EL VALLE', 'estado' => 'activo'],
            ['id_pais' => 1, 'id_region' => 7, 'descripcion' =>	'ENRIQUILLO', 'estado' => 'activo'],
            ['id_pais' => 1, 'id_region' => 8, 'descripcion' =>	'YUMA', 'estado' => 'activo'],
            ['id_pais' => 1, 'id_region' => 9, 'descripcion' =>	'HIGUAMO', 'estado' => 'activo'],
            ['id_pais' => 1, 'id_region' => 10, 'descripcion' => 'OZAMA', 'estado' => 'activo']
        );

        foreach ($regiones as $key => $value) {
            regiones::create($value);
        }
    }
}
