<?php

use Illuminate\Database\Seeder;
use App\Librerias\contabilidadGeneral\cg_codigosRetenciones;

class codigosISRSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $codigos1 = array(
            'codigo_isr' => '1',
            'descripcion' => 'ALQUILERES'
        );

        $codigos2 = array(
            'codigo_isr' => '2',
            'descripcion' => 'HONORARIOS POR SERVICIOS'
        );

        $codigos3 = array(
            'codigo_isr' => '3',
            'descripcion' => 'OTRAS RENTAS'
        );

        $codigos4 = array(
            'codigo_isr' => '4',
            'descripcion' => 'OTRAS RENTAS(Rentas Presuntas)'
        );

        $codigos5 = array(
            'codigo_isr' => '5',
            'descripcion' => 'INTERESES PAGADOS A PERSONAS JURIDICAS RESIDENTES'
        );

        $codigos6 = array(
            'codigo_isr' => '6',
            'descripcion' => 'INTERESES PAGADOS A PERSONAS FISICAS RESIDENTES'
        );

        $codigos7 = array(
            'codigo_isr' => '7',
            'descripcion' => 'RETENCION POR PROVEEDORES DEL ESTADO'
        );
        $codigos8 = array(
            'codigo_isr' => '8',
            'descripcion' => 'JUEGOS TELEFONICOS'
        );

        cg_codigosRetenciones::create($codigos1);
        cg_codigosRetenciones::create($codigos2);
        cg_codigosRetenciones::create($codigos3);
        cg_codigosRetenciones::create($codigos4);
        cg_codigosRetenciones::create($codigos5);
        cg_codigosRetenciones::create($codigos6);
        cg_codigosRetenciones::create($codigos7);
        cg_codigosRetenciones::create($codigos8);
    }
}