<?php

use Illuminate\Database\Seeder;
use App\Librerias\cgcatalogo;

class cuentaSeeder extends Seeder
{
    public function run()
    {
        $cgcatalogo = array(
            [
                'cuenta_no'          => '0',
                'descripcion'        => 'prov-control',
                'origen'             => 'deudor',
                'nivel'              => 1,
                'aplica_a'           => 0,
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
                'estado'             => 'inactivo',
                'grupo'              => 'pasivo'
            ],
            [
                'cuenta_no'          => '00',
                'descripcion'        => 'prov-sub',
                'origen'             => 'deudor',
                'nivel'              => 2,
                'aplica_a'           => 0,
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
                'estado'             => 'inactivo',
                'grupo'              => 'pasivo'
            ],
            [
                'cuenta_no'          => '000',
                'descripcion'        => 'prov-aux',
                'origen'             => 'deudor',
                'nivel'              => 3,
                'aplica_a'           => 00,
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
                'estado'             => 'inactivo',
                'grupo'              => 'pasivo'
            ],
        );

        foreach ($cgcatalogo as $key => $value) {
            cgcatalogo::create($value);
        }
    }
}
