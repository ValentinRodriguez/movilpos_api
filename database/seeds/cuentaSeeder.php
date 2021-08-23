<?php

use Illuminate\Database\Seeder;
use App\Librerias\contabilidadGeneral\cgcatalogo;

class cuentaSeeder extends Seeder
{
    public function run()
    {
        $cgcatalogo = array(
            [
                'cuenta_no'          => 1,
                'descripcion'        => 'cuenta control general',
                'origen'             => 'deudor',
                'nivel'              => 1,
                'aplica_a'           => 1,
                'cuenta_resultado'   => 'si',
                'tipo_cuenta'        => 'normal',
                'analitico'          => 'no',
                'depto'              => 'no',
                'referencia'         => 'no',
                'catalogo'           => 'no',
                'selectivo_consumo'  => 'no',
                'retencion'          => 'no',
                'codigo_isr'         => 1,
                'usuario_creador'    => 'movilsoluciones',
                'estado'             => 'activo',
                'grupo'              => 'pasivo'
            ],
            [
                'cuenta_no'          => 11,
                'descripcion'        => 'cuenta sub control general',
                'origen'             => 'deudor',
                'nivel'              => 2,
                'aplica_a'           => 1,
                'cuenta_resultado'   => 'si',
                'tipo_cuenta'        => 'normal',
                'analitico'          => 'no',
                'depto'              => 'no',
                'referencia'         => 'no',
                'catalogo'           => 'no',
                'selectivo_consumo'  => 'no',
                'retencion'          => 'no',
                'codigo_isr'         => 1,
                'usuario_creador'    => 'movilsoluciones',
                'estado'             => 'activo',
                'grupo'              => 'pasivo'
            ],
            [
                'cuenta_no'          => 111,
                'descripcion'        => 'cuenta auxiliar general',
                'origen'             => 'deudor',
                'nivel'              => 3,
                'aplica_a'           => 11,
                'cuenta_resultado'   => 'si',
                'tipo_cuenta'        => 'servicios',
                'analitico'          => 'no',
                'depto'              => 'no',
                'referencia'         => 'no',
                'catalogo'           => 'no',
                'selectivo_consumo'  => 'no',
                'retencion'          => 'no',
                'codigo_isr'         => 1,
                'usuario_creador'    => 'movilsoluciones',
                'estado'             => 'activo',
                'grupo'              => 'pasivo'
            ],
        );

        foreach ($cgcatalogo as $key => $value) {
            cgcatalogo::create($value);
        }
    }
}
