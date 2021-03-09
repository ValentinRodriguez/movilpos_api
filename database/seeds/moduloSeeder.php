<?php

use Illuminate\Database\Seeder;
use App\Librerias\Modulos;

class moduloSeeder extends Seeder
{
    public function run()
    {
        $modulos = array(
            ['modulo' =>'panel de control','orden' => 1,'label' =>'panel de control','routerLink' =>'/menu-panel-control','icon' => 'fas fa-cogs'],    
            ['modulo' =>'mi empresa','orden' => 2,'label' =>'mi negocio','routerLink' =>'/menu-empresa','icon' => 'fas fa-landmark'],    
            ['modulo' =>'miscelaneos','orden' => 3,'label' =>'miscelaneos','routerLink' =>'/menu-miscelaneos','icon' => 'fas fa-dolly-flatbed'],    
            ['modulo' =>'inventario','orden' => 4,'label' =>'inventario','routerLink' =>'/menu-inventario','icon' => 'fas fa-thumbtack'],    
            ['modulo' =>'ventas','orden' => 5,'label' =>'ventas','routerLink' =>'/menu-ventas','icon' => 'fas fa-dollar-sign'],    
            ['modulo' =>'compras','orden' => 6,'label' =>'compras','routerLink' =>'/menu-compras','icon' => 'fas fa-shopping-cart'],    
            ['modulo' =>'contabilidad','orden' => 7,'label' =>'contabilidad General','routerLink' =>'/menu-contabilidad-general','icon' => 'fas fa-file-invoice-dollar'],    
            ['modulo' =>'entradas automáticas','orden' => 8,'label' =>'entradas automaticas','routerLink' =>'/menu-entradas-automaticas','icon' => 'fas fa-door-open'],            
            ['modulo' =>'RR.HH','orden' => 9,'label' =>'recursos humanos','routerLink' =>'/menu-recursos-humanos','icon' => 'fas fa-users'],    
            ['modulo' =>'cuentas por pagar','orden' => 10,'label' =>'cuentas por pagar','routerLink' =>'/menu-cuentas-pagar','icon' => 'fas fa-hand-holding-usd'],    
            ['modulo' =>'Tienda','orden' => 11,'label' =>'tienda online','routerLink' =>'/menu-tienda-online','icon' => 'fas fa-store-slash'],        );

        foreach ($modulos as $key => $value) {
            Modulos::create($value);
        }
        
    }
}
