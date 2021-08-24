<?php

use Illuminate\Database\Seeder;
use App\Librerias\contabilidadGeneral\cgcodigoestados;

class cgcodigoestadosseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $estados = array([
        'id_estado' =>'101',
        'descripcion_esp' => 'Efectivo en caja y bancos',
        'descripcion_ing' =>'Cash and banks',
        'estado' => 'ACTIVO',
        'grupo' =>'Efectivo y Equivalentes',
        'orden_grupo' =>1,
        'tipo_estado' => 'ACTIVOS',
        'signo' =>1, // 1-POSITIVO      2-NEGATIVO
        'usuario_creador' =>'JSOTO',
        'usuario_modificador' =>' '

      ],
      [
        'id_estado' =>'111',
        'descripcion_esp' => 'Cuentas por cobrar clientes locales',
        'descripcion_ing' =>'Local Account receiveble',
        'estado' => 'ACTIVO',
        'grupo' =>'Cuentas por cobrar Corrientes',
        'orden_grupo' =>2,
        'tipo_estado' => 'ACTIVOS',
        'signo' =>1, // 1-POSITIVO      2-NEGATIVO
        'usuario_creador' =>'JSOTO',
        'usuario_modificador' =>' '

      ],
      [
        'id_estado' =>'112',
        'descripcion_esp' => 'Cuentas por Cobrar Clientes Exportacion',
        'descripcion_ing' =>'Export Account Receiveble',
        'estado' => 'ACTIVO',
        'grupo' =>'Cuentas por cobrar Corrientes',
        'orden_grupo' =>1,
        'tipo_estado' => 'ACTIVOS',
        'signo' =>1, // 1-POSITIVO      2-NEGATIVO
        'usuario_creador' =>'JSOTO',
        'usuario_modificador' =>' '

      ]);
      foreach ($estados as $key => $value) {
        cgcodigoestados::create($value);
      }
    }
}
