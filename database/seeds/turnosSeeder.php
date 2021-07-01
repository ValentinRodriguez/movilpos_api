<?php

use Illuminate\Database\Seeder;
use App\Librerias\turnos;

class turnosSeeder extends Seeder
{
    public function run()
    {
        $turno = array(
            ['descripcion' => 'de 8 a 5pm', 'usuario_creador' => 'movilsoluciones', 'estado' => 'activo']       
        );
        
        foreach ($turno as $key => $value) {
            turnos::create($value); 
        }
    }
}
