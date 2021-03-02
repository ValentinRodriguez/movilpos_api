<?php

use Illuminate\Database\Seeder;
use App\Librerias\Modulos;

class moduloSeeder extends Seeder
{
    public function run()
    {
        $panelControl = array(
            'modulo' =>'panel de control',
            'orden' => 1,
            'label' =>'panel de control',
            'routerLink' =>'/menu-panel-control',
            'icon' => 'fas fa-cogs'
        );

        $empresa = array(
            'modulo' =>'mi empresa',
            'orden' => 2,
            'label' =>'mi negocio',
            'routerLink' =>'/menu-empresa',
            'icon' => 'fas fa-landmark'
        );

        $miscelaneos = array(
            'modulo' =>'miscelaneos',
            'orden' => 3,
            'label' =>'miscelaneos',
            'routerLink' =>'/menu-miscelaneos',
            'icon' => 'fas fa-dolly-flatbed'
        );

        $inventario = array(
            'modulo' =>'inventario',
            'orden' => 4,
            'label' =>'inventario',
            'routerLink' =>'/menu-inventario',
            'icon' => 'fas fa-thumbtack'
        );

        $ventas = array(
            'modulo' =>'ventas',
            'orden' => 5,
            'label' =>'ventas',
            'routerLink' =>'/menu-ventas',
            'icon' => 'fas fa-dollar-sign'
        );

        $compras = array(
            'modulo' =>'compras',
            'orden' => 6,
            'label' =>'compras',
            'routerLink' =>'/menu-compras',
            'icon' => 'fas fa-shopping-cart'
        );

        $contabilidad = array(
            'modulo' =>'contabilidad',
            'orden' => 7,
            'label' =>'contabilidad General',
            'routerLink' =>'/menu-contabilidad-general',
            'icon' => 'fas fa-file-invoice-dollar'
        );

        $entradas = array(
            'modulo' =>'entradas automáticas',
            'orden' => 8,
            'label' =>'entradas automaticas',
            'routerLink' =>'/menu-entradas-automaticas',
            'icon' => 'fas fa-door-open'
        );
        
        $rrhh = array(
            'modulo' =>'RR.HH',
            'orden' => 9,
            'label' =>'recursos humanos',
            'routerLink' =>'/menu-recursos-humanos',
            'icon' => 'fas fa-users'
        );

        $cxp = array(
            'modulo' =>'cuentas por pagar',
            'orden' => 10,
            'label' =>'cuentas por pagar',
            'routerLink' =>'/menu-cuentas-pagar',
            'icon' => 'fas fa-hand-holding-usd'
        );

        $tienda = array(
            'modulo' =>'Tienda',
            'orden' => 11,
            'label' =>'tienda online',
            'routerLink' =>'/menu-tienda-online',
            'icon' => 'fas fa-store-slash'
        );


        Modulos::create($panelControl);
        Modulos::create($empresa);
        Modulos::create($miscelaneos);
        Modulos::create($inventario);
        Modulos::create($ventas);
        Modulos::create($compras);
        Modulos::create($contabilidad);
        Modulos::create($entradas);
        Modulos::create($rrhh);
        Modulos::create($tienda);
        Modulos::create($cxp);
    }
}
