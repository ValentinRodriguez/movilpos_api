<?php

use Illuminate\Database\Seeder;
use App\Librerias\Departamento;
class departamentoSeeder extends Seeder
{
    public function run()
    {
        $departamento = array(
            'titulo'	       => 'departamento general',
            'descripcion'	   => 'departamento general',
            'tipodepartamento' => 'departamento general',
            'usuario_creador'  => 'movilsoluciones',
            'estado'	       => 'activo',
        );
        Departamento::create($departamento);
    }
}
