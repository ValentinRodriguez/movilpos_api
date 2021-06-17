<?php

use Illuminate\Database\Seeder;
use App\Librerias\Mclientes;
use App\Librerias\tipoClientes;
use App\Librerias\TipoNegocio;

class clienteSeeder extends Seeder
{
    public function run()
    {   
        $tipo_cliente = array(
            'tipo_cliente' => 1,'descripcion' => 'CLIENTE CONTADO','estado' => 'inactivo','usuario_creador' => 'movilsoluciones'
        );
        
        $tipo_negocio = array(
            'tipo_negocio' => 1,'descripcion' => 'PROVISIONAL','estado' => 'inactivo','usuario_creador' => 'movilsoluciones'
        );

        $cliente = array(
            'tipo_cliente' =>1,
            'sec_cliente' =>1,
            'nombre' =>'CLIENTE CONTADO',
            'tipo_documento' => 1,
            'documento' => 'XXX-XXXXXXX-X',
            'vendedor' => 1,
            'limite_credito' => 0,
            'cond_pago' => 1,
            'tipo_negocio' => 1,
            'ncf' => 00000000000,
            'generico' => 'SI',
            'calle' => 'XXXXXXXXXXXXX',
            'casa_num' => 'XXX',
            'telefono_oficina' => '(XXX)-XXX-XXXX',
            'id_pais' => 1,
            'id_sector' => 173,
            'id_municipio' => 137,
            'id_region' => 8,
            'id_ciudad' => 1,
            'id_provincia' => 1,
            'celular' => '(XXX)-XXX-XXXX',
            'telefono_casa' => '(XXX)-XXX-XXXX',
            'email' => 'xxxxxxxxxxxxxxxxxxx',
            'url' => 'xxxxxxxxxxxxxxxxxxx',
            'estado' => 'inactivo',
            'usuario_creador' => 'movilsoluciones'
        );

        tipoClientes::create($tipo_cliente);
        TipoNegocio::create($tipo_negocio);
        Mclientes::create($cliente);
    }
}
