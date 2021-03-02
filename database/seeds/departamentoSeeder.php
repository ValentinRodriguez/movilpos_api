<?php

use Illuminate\Database\Seeder;
use App\Librerias\Departamento;
class departamentoSeeder extends Seeder
{
    public function run()
    {
        $departamento = array(
            'titulo'	       => 'provisional',
            'descripcion'	   => 'provisional',
            'tipodepartamento' => 'provisional',
            'usuario_creador'  => 'movilsoluciones',
            'estado'	       => 'activo',
        );
        Departamento::create($departamento);
    }
}
