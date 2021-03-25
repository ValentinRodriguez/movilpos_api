<?php

use Illuminate\Database\Seeder;
use App\Librerias\tipoMonedas;

class MonedasSeeder extends Seeder
{
    public function run()
    {
        $pesos = array( 'divisa' => 'DOP',
                        'simbolo'=> '$RD',
                        'descripcion' =>'peso dominicano',
                        'estado' => 'activo', 
                        'usuario_creador'=> 'movilsoluciones',
                        'usuario_modificador'=> ''
        );

        $dolares = array('divisa' => 'EUR',
                         'simbolo'=> '€',
                         'descripcion' => 'dolar',
                         'estado' => 'activo', 
                         'usuario_creador'=> 'movilsoluciones',
                         'usuario_modificador'=> ''
        );

        $euros = array( 'divisa' => 'USD',
                        'simbolo'=> '$',
                        'descripcion' => 'euro',
                        'estado' => 'activo', 
                        'usuario_creador'=> 'movilsoluciones',
                        'usuario_modificador'=> ''
        );

        tipoMonedas::create($pesos);
        tipoMonedas::create($dolares);
        tipoMonedas::create($euros); 
    }
}
