<?php

use Illuminate\Database\Seeder;
use App\Librerias\Menu;

class menuSeeder extends Seeder
{
    public function run()
    {
        $menues = array(

            // PANEL DE CONTROL 1
            ['id_menu' => 1,'modulo' => 1,'status' => 1,'codigo' => 'pc1','nombre' => 'gestión de usuarios','descripcion' => 'menu de gestion de usuarios','url' => 'gestion-de-usuarios','estado' => 'ACTIVO'],
    
            // MI EMPRESA 2
            ['id_menu' => 1,'modulo' => 2,'status' => 1,'codigo' => 'emp2','nombre' => 'gestión de monedas','descripcion' => 'menu de gestion de monedas','url' => 'gestion-de-monedas','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 2,'status' => 1,'codigo' => 'emp3','nombre' => 'mi empresa','descripcion' => 'menu de gestión de la empresa','url' => 'gestion-de-empresa','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 2,'status' => 1,'codigo' => 'emp4','nombre' => 'gestión de tipo de negocios','descripcion' => 'menu de gestión de la empresa','url' => 'gestion-de-tipo-negocios','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 2,'status' => 1,'codigo' => 'emp5','nombre' => 'gestión de tipo de clientes','descripcion' => 'menu de gestion de la empresa','url' => 'gestion-de-tipo-clientes','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 3,'status' => 1,'codigo' => 'emp6','nombre' => 'gestión de actividades','descripcion' => 'menu de gestion de actividades','url' => 'gestion-de-actividades','estado' => 'ACTIVO'],
    
            // INVENTARIO 3
            ['id_menu' => 2,'modulo' => 4,'status' => 1,'codigo' => 'invr1','nombre' => 'Reporte de catalogo de productos','descripcion' => 'menu de inventario','url' => 'reporte-catalogo-productos','estado' => 'ACTIVO'],
            ['id_menu' => 2,'modulo' => 4,'status' => 1,'codigo' => 'invr2','nombre' => 'Reporte de operaciones por movimientos','descripcion' => 'menu de inventario','url' => 'reporte-operaciones-por-movimientos','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp1','nombre' => 'Maestra de productos','descripcion' => 'menu de inventario','url' => 'gestion-de-productos','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp2','nombre' => 'Gestion de bodegas','descripcion' => 'menu de inventario','url' => 'gestion-de-bodegas','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp3','nombre' => 'Gestion de modelos','descripcion' => 'menu de inventario','url' => 'gestion-de-modelos','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp4','nombre' => 'Gestion de tipos de inventarios','descripcion' => 'menu de inventario','url' => 'gestion-tipos-inventarios','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp5','nombre' => 'Gestion de marcas','descripcion' => 'menu de inventario','url' => 'gestion-de-marcas','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp6','nombre' => 'Gestion de tipos de movimientos','descripcion' => 'menu de inventario','url' => 'gestion-tipos-movimientos','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp7','nombre' => 'Transacciones de inventario','descripcion' => 'menu de inventario','url' => 'gestion-transacciones-inventario','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp8','nombre' => 'Conteo de productos','descripcion' => 'menu de inventario','url' => 'conteo-productos','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'comp2','nombre' => 'Gestión de transportistas','descripcion' => 'menu de inventario','url' => 'gestion-de-transportistas','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp9','nombre' => 'gestión de propiedades','descripcion' => 'menu de gestion de propiedades','url' => 'gestion-de-propiedades','estado' => 'ACTIVO'],
    
            // MODULO DE VEWNTAS
            ['id_menu' => 1,'modulo' => 5,'status' => 1,'codigo' => 'vep1','nombre' => 'Interfaz de ventas','descripcion' => 'modulo de ventas','url' => 'interfaz-ventas','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 5,'status' => 1,'codigo' => 'vep2','nombre' => 'Generacion formulario 607','descripcion' => 'Modulo ventas','url' => 'generacion_formulario_607','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 5,'status' => 1,'codigo' => 'vep3','nombre' => 'Ofertas y Promociones','descripcion' => 'Modulo ventas','url' => 'ofertas-promociones','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 5,'status' => 1,'codigo' => 'vep4','nombre' => 'Gestion de clientes','descripcion' => 'Modulo ventas','url' => 'gestion-de-clientes','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 5,'status' => 1,'codigo' => 'vep5','nombre' => 'gestión ordenes de pedidos','descripcion' => 'Modulo ventas','url' => 'gestion-de-ordenes-de-pedidos','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 5,'status' => 1,'codigo' => 'vep6','nombre' => 'gestión de cotizaciones','descripcion' => 'Modulo ventas','url' => 'gestion-de-cotizaciones','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 5,'status' => 1,'codigo' => 'vep7','nombre' => 'Condiciones de pago','descripcion' => 'modulo de ventas','url' => 'condiciones-de-pago','estado' => 'ACTIVO'],
    
            // MODULO DE COMPRAS      
            ['id_menu' => 1,'modulo' => 6,'status' => 1,'codigo' => 'comp1','nombre' => 'Gestión de ordenes de compras','descripcion' => 'menu de compras','url' => 'gestion-de-ordenes-compras','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 6,'status' => 1,'codigo' => 'comp2','nombre' => 'Gestión de proveedores','descripcion' => 'menu de compras','url' => 'gestion-de-proveedores','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 6,'status' => 1,'codigo' => 'comp3','nombre' => 'Gestión de requisiciones','descripcion' => 'menu de compras','url' => 'gestion-de-requisiciones','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 6,'status' => 1,'codigo' => 'comp4','nombre' => 'Gestión de puertos','descripcion' => 'menu de compras','url' => 'gestion-de-puertos','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 6,'status' => 1,'codigo' => 'comp5','nombre' => 'Gestión de direcciones de envío','descripcion' => 'menu de compras','url' => 'gestion-de-direcciones-envio','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 6,'status' => 1,'codigo' => 'comp7','nombre' => 'transacciones cuentas por cobrar','descripcion' => 'Modulo Compras','url' => 'gestion-transacciones-cpx','estado' => 'ACTIVO'],
    
            //MODULO DE CONTABILIDAD GENERAL      
            ['id_menu' => 1,'modulo' => 7,'status' => 1,'codigo' => 'cgp1','nombre' => 'gestión del catalogo cuentas','descripcion' => 'menu de contabilidad general','url' => 'gestion-catalogo-cuentas','estado' => 'ACTIVO'],
            ['id_menu' => 2,'modulo' => 7,'status' => 1,'codigo' => 'cgp2','nombre' => 'Diario General','descripcion' => 'menu de contabilidad general','url' => 'diario_general','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 7,'status' => 1,'codigo' => 'cgp3','nombre' => 'periodo fiscales','descripcion' => 'menu de contabilidad general','url' => 'gestion-periodos-fiscales','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 7,'status' => 1,'codigo' => 'cgp4','nombre' => 'Entradas de diario','descripcion' => 'menu de contabilidad general','url' => 'gestion-entradas-diario','estado' => 'ACTIVO'],
            
            //MODULO DE ENTRADAS AUTOMATICAS       
            ['id_menu' => 1,'modulo' => 8,'status' => 1,'codigo' => 'entp1','nombre' => 'Cobros','descripcion' => 'menu de entradas automaticas','url' => 'cobros','estado' => 'ACTIVO'],
            
            //MODULO DE RECURSOS HUMANOS
            ['id_menu' => 1,'modulo' => 9,'status' => 1,'codigo' => 'hrp1','nombre' => 'Gestion de empleados','descripcion' => 'Modulo RR.HH','url' => 'gestion-de-empleados','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 9,'status' => 1,'codigo' => 'hrp2','nombre' => 'Gestion de puestos','descripcion' => 'Modulo RR.HH','url' => 'gestion-de-puestos','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 9,'status' => 1,'codigo' => 'hrp3','nombre' => 'Gestion de departamentos','descripcion' => 'Modulo RR.HH','url' => 'gestion-de-departamentos','estado' =>'ACTIVO']

            //MODULO CUENTAS POR PAGAR

        );

        foreach ($menues as $key => $value) {
            Menu::create($value);
        }  
    }
}