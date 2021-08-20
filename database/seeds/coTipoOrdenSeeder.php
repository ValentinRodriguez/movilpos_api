<?php

use Illuminate\Database\Seeder;
use App\Librerias\compras\coTipoOrden;

class coTipoOrdenSeeder extends Seeder
{
    public function run()
    {
        $general = array('id' => 1,
            'descripcion' => 'Generales',
            'usuario_creador' => 'movilsoluciones',
            'estado' => 'activo'
        );

        $rov = array('id' => 2,
            'descripcion' => 'Rov.ltd',
            'usuario_creador' => 'movilsoluciones',
            'estado' => 'activo'
        );

        $locales = array('id' => 2,
            'descripcion' => 'Locales',
            'usuario_creador' => 'movilsoluciones',
            'estado' => 'activo'
        );

        $miscelaneas = array('id' => 2,
            'descripcion' => 'Miscelaneas',
            'usuario_creador' => 'movilsoluciones',
            'estado' => 'activo'
        );

        coTipoOrden::create($general);  
        coTipoOrden::create($rov); 
        coTipoOrden::create($locales);  
        coTipoOrden::create($miscelaneas); 
    }
}
