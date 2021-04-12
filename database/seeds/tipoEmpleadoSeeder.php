<?php

use Illuminate\Database\Seeder;
use App\Librerias\tipoEmpleado;

class tipoEmpleadoSeeder extends Seeder
{
    public function run()
    {
        $tipo = array(
            ['descripcion' => 'fijo', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'temporal', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'contratista', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo']       
        );
        
        foreach ($tipo as $key => $value) {
            tipoEmpleado::create($value); 
        } 
    }
}
