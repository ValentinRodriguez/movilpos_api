<?php

use Illuminate\Database\Seeder;
use App\Librerias\globales\zonas;

class zonasSeeder extends Seeder
{
    public function run()
    {
        $zona1 = array("id_zonalocal" => 1,
                      "descripcion"=> 'santo domingo norte');

        zonas::create($zona1);
    }
}
