<?php

use Illuminate\Database\Seeder;
use App\Librerias\contabilidadGeneral\cg_codigosRetenciones;

class codigosISRSeeder extends Seeder
{
    public function run()
    {
        $codigos = array(
            ['codigo_isr' => '1','descripcion' => 'ALQUILERES'],
            ['codigo_isr' => '2','descripcion' => 'HONORARIOS POR SERVICIOS'],
            ['codigo_isr' => '3','descripcion' => 'OTRAS RENTAS'],
            ['codigo_isr' => '4','descripcion' => 'OTRAS RENTAS(Rentas Presuntas)'],
            ['codigo_isr' => '5','descripcion' => 'INTERESES PAGADOS A PERSONAS JURIDICAS RESIDENTES'],
            ['codigo_isr' => '6','descripcion' => 'INTERESES PAGADOS A PERSONAS FISICAS RESIDENTES'],
            ['codigo_isr' => '7','descripcion' => 'RETENCION POR PROVEEDORES DEL ESTADO'],
            ['codigo_isr' => '8','descripcion' => 'JUEGOS TELEFONICOS']
        );

        foreach ($codigos as $key => $value) {
            cg_codigosRetenciones::create($value);
        } 
    }
}