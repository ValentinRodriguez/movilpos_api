<?php

use Illuminate\Database\Seeder;
use App\Librerias\tienda\planes;

class planesSeeder extends Seeder
{
    public function run()
    {
        $test = array (
            'Lorem ipsum dolor sit amet',
            'consectetur adipisicing elit',
            'Sit tempore consequatur commodi',
            'nihil quis voluptatem laudantium',
            'dolorem enim. A impedit blanditiis',
            'exercitationem cum atque eveniet',
            'commodi quibusdam',
            'provident dicta cumque'
          );

        $planes = array(
            ["titulo" => "basico" , 
             "tipo" => 1,
             "precio" => "GRATIS", 
             "popular" => "0", 
             "detalles" => json_encode($test)],
            ["titulo" => "intermedio" , 
             "tipo" => 2,
             "precio" => "1000.00", 
             "popular" => "1",
             "detalles" => json_encode($test)
            ],
            ["titulo" => "avanzado" , 
             "tipo" => 3,
             "precio" => "3000.00", 
             "popular" => "0", 
             "detalles" => json_encode($test)],
        );

        foreach ($planes as $key => $value) {
            planes::create($value);
        }
    }
}
