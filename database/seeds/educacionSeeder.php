<?php

use Illuminate\Database\Seeder;
use App\Librerias\rrhh\educacion;

class educacionSeeder extends Seeder
{
    public function run()
    {
        $educacion = array(
            ['descripcion' => 'ninguna', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'basica', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'bachiller', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'tecnico', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'universitario', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'maestria', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'postgrado', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'doctorado', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],        
        );
        
        foreach ($educacion as $key => $value) {
            educacion::create($value); 
        } 
    }
}
