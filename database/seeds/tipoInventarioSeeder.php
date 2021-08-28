<?php

use Illuminate\Database\Seeder;
use App\Librerias\inventario\invTipos;

class tipoInventarioSeeder extends Seeder
{
    public function run()
    {        
        $invTipos = array(
            ['id_tipoinventario' => 1,'descripcion' => 'inventario general1','cuenta_no' => 1,'usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_tipoinventario' => 2,'descripcion' => 'inventario general2','cuenta_no' => 1,'usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_tipoinventario' => 3,'descripcion' => 'inventario general3','cuenta_no' => 1,'usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_tipoinventario' => 4,'descripcion' => 'inventario general4','cuenta_no' => 1,'usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_tipoinventario' => 5,'descripcion' => 'inventario general5','cuenta_no' => 1,'usuario_creador' => 'movilsoluciones','estado' => 'activo'],
            ['id_tipoinventario' => 6,'descripcion' => 'inventario general6','cuenta_no' => 1,'usuario_creador' => 'movilsoluciones','estado' => 'activo'],
        );
        foreach ($invTipos as $key => $value) {
            invTipos::create($value);  
        }
    }
}
