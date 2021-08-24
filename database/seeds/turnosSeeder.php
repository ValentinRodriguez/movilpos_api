<?php

use App\Librerias\rrhh\turnos;
use Illuminate\Database\Seeder;

class turnosSeeder extends Seeder
{
    public function run()
    {
        $turno = array(
            ['descripcion' => 'turno general', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo']       
        );
        
        foreach ($turno as $key => $value) {
            turnos::create($value); 
        }
    }
}
