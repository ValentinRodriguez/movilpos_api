<?php

use Illuminate\Database\Seeder;
use App\Librerias\compras\coTipoOrden;

class tipoordenseeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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

    $locales = array('id' => 3,
        'descripcion' => 'Locales',
        'usuario_creador' => 'movilsoluciones',
        'estado' => 'activo'
    );

    $miscelaneas = array('id' => 4,
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
