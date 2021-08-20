<?php

use Illuminate\Database\Seeder;
use App\Librerias\empresa\permisosEmpresa;

class permisosEmpresaSeeder extends Seeder
{
    public function run()
    {
        $permisos = array(
            ['descripcion' => 'permiso 1', 'usuario_creador' => 'movilsoluciones'],
            ['descripcion' => 'permiso 2', 'usuario_creador' => 'movilsoluciones'],
            ['descripcion' => 'permiso 3', 'usuario_creador' => 'movilsoluciones']
        );
       
        foreach ($permisos as $key => $value) {
            permisosEmpresa::create($value); 
        } 
    }
}
