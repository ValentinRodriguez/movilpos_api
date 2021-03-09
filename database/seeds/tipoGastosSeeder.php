<?php

use Illuminate\Database\Seeder;
use App\Librerias\cgTipoGastos;

class tipoGastosSeeder extends Seeder
{
    public function run()
    {
        $servicio = array(
                        ['codigo_fiscal' => 1,'descripcion' => 'GASTOS PERSONALES','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
                        ['codigo_fiscal' => 2,'descripcion' => 'GASTOS POR TRABAJOS SUMINISTROS Y SERVICIOS','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
                        ['codigo_fiscal' => 3,'descripcion' => 'ARRENDAMIENTOS','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
                        ['codigo_fiscal' => 4,'descripcion' => 'GASTOS ACTIVOS FIJOS','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
                        ['codigo_fiscal' => 5,'descripcion' => 'GASTOS DE REPRESENTACION','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
                        ['codigo_fiscal' => 6,'descripcion' => 'OTRAS DEDUCCIONES ADMITIDAS','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
                        ['codigo_fiscal' => 7,'descripcion' => 'GASTOS FINANCIEROS','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
                        ['codigo_fiscal' => 8,'descripcion' => 'GASTOS EXTRAORDINARIOS','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
                        ['codigo_fiscal' => 9,'descripcion' => 'FORMAS Y GASTOS','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
                        ['codigo_fiscal' => 10,'descripcion' => 'ADQUISICIONES DE ACTIVOS','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
                        ['codigo_fiscal' => 11,'descripcion' => 'GASTOS DE SEGURO','usuario_creador' => 'movilsoluciones','estado' => 'activo'],
                        ['codigo_fiscal' => 12,'descripcion' => 'ARRENDAMIENTOS','usuario_creador' => 'movilsoluciones','estado' => 'activo']
                    );
        foreach ($servicio as $key => $value) {
            cgTipoGastos::create($value);  
        } 
    }
}
