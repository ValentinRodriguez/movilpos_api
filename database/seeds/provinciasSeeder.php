<?php

use Illuminate\Database\Seeder;
use App\Librerias\globales\provincias;

class provinciasSeeder extends Seeder
{
    public function run()
    {
        $provincias = array(
            ['id_provincia' =>  1 , 'descripcion' => 'DISTRITO NACIONAL' , 'id_region' => 10 , 'estado' => 'activo'],
            ['id_provincia' =>  2 , 'descripcion' => 'LA ALTAGRACIA' , 'id_region' => 8 , 'estado' => 'activo'],
            ['id_provincia' =>  3 , 'descripcion' => 'AZUA' , 'id_region' => 5 , 'estado' => 'activo'],
            ['id_provincia' =>  4 , 'descripcion' => 'BAHORUCO' , 'id_region' => 7 , 'estado' => 'activo'],
            ['id_provincia' =>  5 , 'descripcion' => 'BARAHONA' , 'id_region' => 7 , 'estado' => 'activo'],
            ['id_provincia' =>  6 , 'descripcion' => 'DAJABON' , 'id_region' => 4 , 'estado' => 'activo'],
            ['id_provincia' =>  7 , 'descripcion' => 'DUARTE' , 'id_region' => 3 , 'estado' => 'activo'],
            ['id_provincia' =>  8 , 'descripcion' => 'EL SEIBO' , 'id_region' => 8 , 'estado' => 'activo'],
            ['id_provincia' =>  9 , 'descripcion' => 'ELIAS PIÑA' , 'id_region' => 6 , 'estado' => 'activo'],
            ['id_provincia' =>  10, 'descripcion' => 'ESPAILLAT' , 'id_region' => 1 , 'estado' => 'activo'],
            ['id_provincia' =>  11, 'descripcion' => 'HATO MAYOR' , 'id_region' => 9 , 'estado' => 'activo'],
            ['id_provincia' =>  12, 'descripcion' => 'INDEPENDENCIA' , 'id_region' => 7 , 'estado' => 'activo'],
            ['id_provincia' =>  13, 'descripcion' => 'LA ROMANA' , 'id_region' => 8 , 'estado' => 'activo'],
            ['id_provincia' =>  14, 'descripcion' => 'LA VEGA' , 'id_region' => 2 , 'estado' => 'activo'],
            ['id_provincia' =>  15, 'descripcion' => 'MARIA TRINIDAD SANCHEZ' , 'id_region' => 3 , 'estado' => 'activo'],
            ['id_provincia' =>  16, 'descripcion' => 'MONSEÑOR NOUEL' , 'id_region' => 2 , 'estado' => 'activo'],
            ['id_provincia' =>  17, 'descripcion' => 'MONTE CRISTI' , 'id_region' => 4 , 'estado' => 'activo'],
            ['id_provincia' =>  18, 'descripcion' => 'MONTE PLATA' , 'id_region' => 9 , 'estado' => 'activo'],
            ['id_provincia' =>  19, 'descripcion' => 'PEDERNALES' , 'id_region' => 7 , 'estado' => 'activo'],
            ['id_provincia' =>  20, 'descripcion' => 'PERAVIA' , 'id_region' => 5 , 'estado' => 'activo'],
            ['id_provincia' =>  21, 'descripcion' => 'PUERTO PLATA' , 'id_region' => 1 , 'estado' => 'activo'],
            ['id_provincia' =>  22, 'descripcion' => 'HERMANAS MIRABAL' , 'id_region' => 3 , 'estado' => 'activo'],
            ['id_provincia' =>  23, 'descripcion' => 'SAMANA' , 'id_region' => 3 , 'estado' => 'activo'],
            ['id_provincia' =>  24, 'descripcion' => 'SAN CRISTOBAL' , 'id_region' => 5 , 'estado' => 'activo'],
            ['id_provincia' =>  25, 'descripcion' => 'SAN JUAN' , 'id_region' => 6 , 'estado' => 'activo'],
            ['id_provincia' =>  26, 'descripcion' => 'SAN PEDRO DE MACORIS' , 'id_region' => 9 , 'estado' => 'activo'],
            ['id_provincia' =>  27, 'descripcion' => 'SANCHEZ RAMIREZ' , 'id_region' => 2 , 'estado' => 'activo'],
            ['id_provincia' =>  28, 'descripcion' => 'SANTIAGO' , 'id_region' => 1 , 'estado' => 'activo'],
            ['id_provincia' =>  29, 'descripcion' => 'SANTIAGO RODRIGUEZ' , 'id_region' => 4 , 'estado' => 'activo'],
            ['id_provincia' =>  30, 'descripcion' => 'VALVERDE' , 'id_region' => 4 , 'estado' => 'activo'],
            ['id_provincia' =>  31, 'descripcion' => 'SAN JOSE DE OCOA' , 'id_region' => 5 , 'estado' => 'activo'],
            ['id_provincia' =>  32, 'descripcion' => 'SANTO DOMINGO' , 'id_region' => 10, 'estado' => 'activo']
        );

        foreach ($provincias as $key => $value) {
            provincias::create($value);
        }
    }
}
