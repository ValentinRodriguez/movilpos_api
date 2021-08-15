<?php

use Illuminate\Database\Seeder;
use App\Librerias\invTipos;

class tipoInventarioSeeder extends Seeder
{
    public function run()
    {        
        $invTipos = array(
            ['id_tipoinventario' => 1,
             'descripcion' => 'INVENTARIO GENERAL',
             'cuenta_no' => 1,
             'usuario_creador' => 'movilsoluciones',
             'estado' => 'activo'],
        );
        foreach ($invTipos as $key => $value) {
            invTipos::create($value);  
        }
    }
}
