<?php

use Illuminate\Database\Seeder;
use App\Librerias\sucursales;

class sucursalesSeeder extends Seeder
{
    public function run()
    {
        $empresa = array(
            "cod_cia" => 1,
            "descripcion" => 'sucursal general' ,
            "direccion" => 'XXXXXXX',
            "id_zonalocal" => NULL,
            'id_pais' => 1,
            'id_region' => 7,
            'id_provincia' => 19,
            'id_municipio'=> 69,
            'id_ciudad' => 69,
            'id_sector' => NULL,
            "estado" => 'activo',
            "usuario_creador" => 'movilsoluciones'
        );
                 
        sucursales::create($empresa);
    }
}
