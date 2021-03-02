<?php

use Illuminate\Database\Seeder;
use App\Librerias\cgTransaccionesContables;

class TransContablesSeeder extends Seeder
{
    public function run()
    {
        $transaccion = array(
            'fecha'           => '2021-02-10 14:01:08',
            'tipo'            => 1,
            'ref'             => 'dfgdsf',
            'cuenta_no'       => '111',
            'departamento'    => 1,
            'num_doc'         => 1111,
            'cod_aux'         => 1111,
            'cod_sec'         => 1,
            'detalles'        => 'sdfgsdfg',
            'detalle_1'       => 'sdfgsdfg',
            'detalle_2'       => 'sdfgsdfg',
            'debito'          => 1.00,
            'credito'         => 1.00,
            'usuario_creador' => 'movilsoluciones',
            'estado'          => 'activo'
        );
        cgTransaccionesContables::create($transaccion);
    }
}