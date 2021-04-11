<?php

use Illuminate\Database\Seeder;
use App\Librerias\ciudad;

class CiudadesSeeder extends Seeder
{
    public function run()
    {
        $ciudades = array('Azua','Bahoruco','Barahona','Dajabon','Distrito Nacional','Duarte','Elias Piña','El Seibo','Espaillat','Hato Mayor','Hermanas Mirabal',
                          'Independencia','La Altagracia','La Romana','La Vega','Maria Trinidad Sanchez','Monseñor Nouel','Monte Cristi','Monte Plata','Pedernales',
                          'Peravia','Puerto Plata','Samana','San Cristobal','San Jose de Ocoa','San Juan','San Pedro de Macoris','Sanchez Ramirez','Santiago',
                          'Santiago Rodriguez','Santo Domingo','Valverde',);

        $capital = array('Azua de Compostela','Neiba','Santa Cruz de Barahona','Dajabon','Santo Domingo','San Francisco de Macoris','Comendador','Santa Cruz de El Seibo',
                         'Moca','Hato Mayor del Rey','Salcedo','Jimani','Salvaleon de Higüey','La Romana','La Vega','Nagua','Bonao','San Fernando de Monte Cristi','Monte Plata',
                         'Pedernales','Bani','San Felipe de Puerto Plata','Santa Barbara de Samana','San Cristobal','San Jose de Ocoa','San Juan de Maguana','San Pedro de Macoris',
                         'Cotui','Santiago de los Caballeros','San Ignacio de Sabaneta','Santo Domingo Este','Santa Cruz de Mao');

        for ($i=0; $i < count($ciudades); $i++) { 
            $ciudad =  array(
                'id_ciudad'	=> $i+1,
                'capital' => $capital[$i],
                'descripcion' => $ciudades[$i],
                'id_pais'=> 1,
                'usuario_creador' => 'movilsoluciones',
                'usuario_modificador' => ''
            );
            ciudad::create($ciudad);
        }
    }
}































