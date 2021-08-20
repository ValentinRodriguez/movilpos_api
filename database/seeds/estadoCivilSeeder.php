<?php

use Illuminate\Database\Seeder;
use App\Librerias\rrhh\estadoCivil;

class estadoCivilSeeder extends Seeder
{
    public function run()
    {
        $estadoCilvil = array(
            ['descripcion' => 'soltero/a', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'casado/a', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'divorciado/a', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'viudo/a', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],
            ['descripcion' => 'union-libre', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo'],        
        );
       
        foreach ($estadoCilvil as $key => $value) {
            estadoCivil::create($value); 
        } 
    }
}
