<?php

use Illuminate\Database\Seeder;
use App\Librerias\tipoSangre;

class tipoSangreSeeder extends Seeder
{
    public function run()
    {
        $sangre = array(
            ['descripcion' => 'O+', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'O-', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'A+', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'A-', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'B+', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'B-', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'AB+', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'AB-', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],        
        );
        
        foreach ($sangre as $key => $value) {
            tipoSangre::create($value); 
        }
    }
}
