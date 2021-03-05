<?php

use Illuminate\Database\Seeder;
use App\Librerias\tipoMonedas;

class MonedasSeeder extends Seeder
{
    public function run()
    {
        $pesos = array( 'divisa' => 'peso dominicano',
                        'simbolo'=> '$RD',
                        'estado' => 'activo', 
                        'usuario_creador'=> 'movilsoluciones',
                        'usuario_modificador'=> ''
        );

        $dolares = array('divisa' => 'dolar',
                         'simbolo'=> '$',
                         'estado' => 'activo', 
                         'usuario_creador'=> 'movilsoluciones',
                         'usuario_modificador'=> ''
        );

        $euros = array( 'divisa' => 'euro',
                        'simbolo'=> '€',
                        'estado' => 'activo', 
                        'usuario_creador'=> 'movilsoluciones',
                        'usuario_modificador'=> ''
        );

        tipoMonedas::create($pesos);
        tipoMonedas::create($dolares);
        tipoMonedas::create($euros); 
    }
}
