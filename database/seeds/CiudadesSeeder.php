<?php

use Illuminate\Database\Seeder;
use App\Librerias\ciudad;

class CiudadesSeeder extends Seeder
{
    public function run()
    {
        $ciudades = array('Azua','Bahoruco','Barahona','Dajabón','Distrito Nacional','Duarte','Elías Piña','El Seibo','Espaillat','Hato Mayor','Hermanas Mirabal',
                          'Independencia','La Altagracia','La Romana','La Vega','María Trinidad Sánchez','Monseñor Nouel','Monte Cristi','Monte Plata','Pedernales',
                          'Peravia','Puerto Plata','Samaná','San Cristóbal','San José de Ocoa','San Juan','San Pedro de Macorís','Sánchez Ramírez','Santiago',
                          'Santiago Rodríguez','Santo Domingo','Valverde',);

        $capital = array('Azua de Compostela','Neiba','Santa Cruz de Barahona','Dajabón','Santo Domingo','San Francisco de Macorís','Comendador','Santa Cruz de El Seibo',
                         'Moca','Hato Mayor del Rey','Salcedo','Jimaní','Salvaleón de Higüey','La Romana','La Vega','Nagua','Bonao','San Fernando de Monte Cristi','Monte Plata',
                         'Pedernales','Baní','San Felipe de Puerto Plata','Santa Bárbara de Samaná','San Cristóbal','San José de Ocoa','San Juan de Maguana','San Pedro de Macorís',
                         'Cotuí','Santiago de los Caballeros','San Ignacio de Sabaneta','Santo Domingo Este','Santa Cruz de Mao');

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































