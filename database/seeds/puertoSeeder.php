<?php

use Illuminate\Database\Seeder;
use App\Librerias\compras\co_puerto;

class puertoSeeder extends Seeder
{
    public function run()
    {
        $puerto = array(
            'descripcion' => 'local',
            'dias' => 0
        );
        co_puerto::create($puerto);
    }
}
