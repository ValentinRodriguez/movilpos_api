<?php

use Illuminate\Database\Seeder;
use App\Librerias\turnos;

class turnosSeeder extends Seeder
{
    public function run()
    {
        $turno = array(
            ['descripcion' => 'turno provisional', 'usuario_creador' => 'movilsoluciones', 'estado' => 'inactivo']       
        );
        
        foreach ($turno as $key => $value) {
            turnos::create($value); 
        }
    }
}
