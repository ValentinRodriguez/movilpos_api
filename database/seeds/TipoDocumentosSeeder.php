<?php

use Illuminate\Database\Seeder;
use App\Librerias\tipo_documento;

class TipoDocumentosSeeder extends Seeder
{
    public function run()
    {
        $cedula = array('descripcion' => 'cedula',
                        'origen'=> 'debito',
                        'estado' => 'activo', 
                        'usuario_creador'=> 'movilsoluciones'
        );

        $rnc = array('descripcion' => 'RNC',
                     'origen'=> 'debito',
                     'estado' => 'activo', 
                     'usuario_creador'=> 'movilsoluciones'
        );

        $pasaporte = array('descripcion' => 'pasaporte',
                           'origen'=> 'debito',
                           'estado' => 'activo', 
                           'usuario_creador'=> 'movilsoluciones'
        );
        
        tipo_documento::create($pasaporte);
        tipo_documento::create($cedula);
        tipo_documento::create($rnc);
    }
}
