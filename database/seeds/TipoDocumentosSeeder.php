<?php

use Illuminate\Database\Seeder;
use App\Librerias\empresa\tipo_documento;
// use Illuminate\Support\Facades\DB;

class TipoDocumentosSeeder extends Seeder
{
    public function run()
    {
        // DB::table('tipo_documento')->truncate();

        $documentos = array(
            ['tipo_documento' => 1,'descripcion' => 'Cedula','origen'=> 'debito','estado' => 'activo','usuario_creador'=> 'movilsoluciones'],
            ['tipo_documento' => 2,'descripcion' => 'RNC','origen'=> 'debito','estado' => 'activo', 'usuario_creador'=> 'movilsoluciones'],
            ['tipo_documento' => 3,'descripcion' => 'Pasaporte','origen'=> 'debito','estado' => 'activo', 'usuario_creador'=> 'movilsoluciones'],
            ['tipo_documento' => 4,'descripcion' => 'Ninguno','origen'=> 'debito','estado' => 'activo', 'usuario_creador'=> 'movilsoluciones']
        );

        foreach ($documentos as $key => $value) {
            tipo_documento::create($value);
        }
    }
}
