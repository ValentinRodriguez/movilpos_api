<?php

use Illuminate\Database\Seeder;
use App\Librerias\inventario\inspeccionesVehiculos;

class inspeccionesSeeder extends Seeder
{    
    public function run()
    {
        $inspecciones = array(
            ['descripcion' => 'espejo retrovisor interno', 'campo'=>'campo1', 'valor' => 'no'],
            ['descripcion' => 'espejo retrovisor derecho', 'campo'=>'campo2', 'valor' => 'no'],
            ['descripcion' => 'espejo retrovisor izquierdo', 'campo'=>'campo3', 'valor' => 'no'],
            ['descripcion' => 'tapon de gasolina', 'campo'=>'campo4', 'valor' => 'no'],
            ['descripcion' => 'tapon del radiador', 'campo'=>'campo5', 'valor' => 'no'],
            ['descripcion' => 'Radios/Cassete', 'campo'=>'campo6', 'valor' => 'no'],
            ['descripcion' => 'CD de disco', 'campo'=>'campo7', 'valor' => 'no'],
            ['descripcion' => 'telefono celular', 'campo'=>'campo8', 'valor' => 'no'],
            ['descripcion' => 'gomas', 'campo'=>'campo9', 'valor' => 'no'],
            ['descripcion' => 'llave de rueda, gato y herramientas', 'campo'=>'campo10', 'valor' => 'no'],
            ['descripcion' => 'gomas de repuesto', 'campo'=>'campo11', 'valor' => 'no'],
            ['descripcion' => 'estado de los cristales', 'campo'=>'campo12', 'valor' => 'no'],
            ['descripcion' => 'alfombras', 'campo'=>'campo13', 'valor' => 'no'],
            ['descripcion' => 'botiquin', 'campo'=>'campo14', 'valor' => 'no'],
            ['descripcion' => 'menu de gestion de usuarios', 'campo'=>'campo15', 'valor' => 'no'],
            ['descripcion' => 'encendedor', 'campo'=>'campo16', 'valor' => 'no'],
            ['descripcion' => 'luces direccionales delanteras', 'campo'=>'campo17', 'valor' => 'no'],
            ['descripcion' => 'luces direccionales traseras', 'campo'=>'campo18', 'valor' => 'no'],
            ['descripcion' => 'manual del usuario', 'campo'=>'campo19', 'valor' => 'no'],
            ['descripcion' => 'duplicado llave de encendido', 'campo'=>'campo20', 'valor' => 'no'],
            ['descripcion' => 'centro de aros', 'campo'=>'campo21', 'valor' => 'no'],
        );

        foreach ($inspecciones as $key => $value) {
            inspeccionesVehiculos::create($value);
        }
    }
}
