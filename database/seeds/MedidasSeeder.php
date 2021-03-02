<?php

use Illuminate\Database\Seeder;
use App\Librerias\medidas;

class MedidasSeeder extends Seeder
{
    public function run()
    {
        $metros = array(
            'nombre' => 'metros',
            'codigo' => 'mts',
            'estado' => 'activo',
            'usuario_creador' => 'movilsoluciones',
            'usuario_modificador' => ''
        );
        
        $pulgadas = array(
            'nombre' => 'pulgadas',
            'codigo' => 'mts',
            'estado' => 'activo',
            'usuario_creador' => 'movilsoluciones',
            'usuario_modificador' => ''
        );

        $centimetros = array(
            'nombre' => 'centimetros',
            'codigo' => 'cms',
            'estado' => 'activo',
            'usuario_creador' => 'movilsoluciones',
            'usuario_modificador' => ''
        );

        $unidad = array(
            'nombre' => 'unidad',
            'codigo' => 'ud',
            'estado' => 'activo',
            'usuario_creador' => 'movilsoluciones',
            'usuario_modificador' => ''
        );

        medidas::create($unidad);
        medidas::create($metros);
        medidas::create($pulgadas);
        medidas::create($centimetros);
    }
}
