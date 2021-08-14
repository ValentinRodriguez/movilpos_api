<?php

use Illuminate\Database\Seeder;
use App\Librerias\cgcatalogo;

class cuentaSeeder extends Seeder
{
    public function run()
    {
        $cgcatalogo = array(
            [
<<<<<<< HEAD
                'cuenta_no'          => '0',
                'descripcion'        => 'prov-control',
=======
                'cuenta_no'          => 1,
                'descripcion'        => 'cuenta control general',
>>>>>>> 4938678b91a33aaae72ecc72094c00df22b3d51d
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
<<<<<<< HEAD
                'usuario_creador'    => 'movilsoluciones',
                'estado'             => 'inactivo',
                'grupo'              => 'pasivo'
            ],
            [
                'cuenta_no'          => '00',
                'descripcion'        => 'prov-sub',
=======
                'usuario_creador'    => 'movilsoluciones',               
                'estado'             => 'activo',
                'grupo'              => 'pasivo'
            ],
            [
                'cuenta_no'          => 11,
                'descripcion'        => 'cuenta sub control general',
>>>>>>> 4938678b91a33aaae72ecc72094c00df22b3d51d
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
<<<<<<< HEAD
                'usuario_creador'    => 'movilsoluciones',
                'estado'             => 'inactivo',
                'grupo'              => 'pasivo'
            ],
            [
                'cuenta_no'          => '000',
                'descripcion'        => 'prov-aux',
=======
                'usuario_creador'    => 'movilsoluciones',               
                'estado'             => 'activo',
                'grupo'              => 'pasivo'
            ],
            [
                'cuenta_no'          => 111,
                'descripcion'        => 'cuenta auxiliar general',
>>>>>>> 4938678b91a33aaae72ecc72094c00df22b3d51d
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
<<<<<<< HEAD
                'usuario_creador'    => 'movilsoluciones',
                'estado'             => 'inactivo',
=======
                'usuario_creador'    => 'movilsoluciones',               
                'estado'             => 'activo',
>>>>>>> 4938678b91a33aaae72ecc72094c00df22b3d51d
                'grupo'              => 'pasivo'
            ],
        );

        foreach ($cgcatalogo as $key => $value) {
            cgcatalogo::create($value);
        }
    }
}
