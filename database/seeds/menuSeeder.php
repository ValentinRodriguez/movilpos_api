<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Librerias\globales\Menu;

class menuSeeder extends Seeder
{
    public function run()
    {
        DB::table('mov_globales.menus')->truncate();
        $menues = array(

            // PANEL DE CONTROL 1
            ['id_menu' => 1,'modulo' => 1,'status' => 1,'codigo' => 'pc1','nombre' => 'gestion de usuarios','descripcion' => 'menu de gestion de usuarios','url' => 'gestion-de-usuarios','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 1,'status' => 1,'codigo' => 'pc2','nombre' => 'gestion de procedimientos','descripcion' => 'menu de gestion de usuarios','url' => 'gestion-de-procesos','estado' => 'ACTIVO'],

            // MI EMPRESA 2
            ['id_menu' => 1,'modulo' => 2,'status' => 1,'codigo' => 'emp2','nombre' => 'gestion de monedas','descripcion' => 'menu de gestion de monedas','url' => 'gestion-de-monedas','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 2,'status' => 1,'codigo' => 'emp3','nombre' => 'mi empresa','descripcion' => 'menu de gestion de la empresa','url' => 'gestion-de-empresa','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 2,'status' => 1,'codigo' => 'emp4','nombre' => 'gestion de tipo de negocios','descripcion' => 'menu de gestion de la empresa','url' => 'gestion-de-tipo-negocios','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 2,'status' => 1,'codigo' => 'emp5','nombre' => 'gestion de tipo de clientes','descripcion' => 'menu de gestion de la empresa','url' => 'gestion-de-tipo-clientes','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 2,'status' => 1,'codigo' => 'emp6','nombre' => 'gestion de zonas','descripcion' => 'menu de gestion de la empresa','url' => 'gestion-de-zonas','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 2,'status' => 1,'codigo' => 'emp7','nombre' => 'gestion de tipo de proveedores','descripcion' => 'menu de gestion de la empresa','url' => 'gestion-tipo-proveedores','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 2,'status' => 1,'codigo' => 'emp8','nombre' => 'gestion de sucursales','descripcion' => 'menu de gestion de la empresa','url' => 'gestion-de-sucursales','estado' => 'ACTIVO'],

            // MISCELANEOS
            ['id_menu' => 1,'modulo' => 3,'status' => 1,'codigo' => 'misc1','nombre' => 'gestion de actividades','descripcion' => 'menu de gestion de actividades','url' => 'gestion-de-actividades','estado' => 'ACTIVO'],

            // INVENTARIO
            ['id_menu' => 2,'modulo' => 4,'status' => 1,'codigo' => 'invr1','nombre' => 'Reporte de catalogo de productos','descripcion' => 'menu de inventario','url' => 'reporte-catalogo-productos','estado' => 'ACTIVO'],
            ['id_menu' => 2,'modulo' => 4,'status' => 1,'codigo' => 'invr2','nombre' => 'Reporte de operaciones por movimientos','descripcion' => 'menu de inventario','url' => 'reporte-operaciones-por-movimientos','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp1','nombre' => 'Maestra de productos','descripcion' => 'menu de inventario','url' => 'gestion-de-productos','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp2','nombre' => 'Gestion de bodegas','descripcion' => 'menu de inventario','url' => 'gestion-de-bodegas','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp3','nombre' => 'Gestion de modelos','descripcion' => 'menu de inventario','url' => 'gestion-lde-modelos','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp4','nombre' => 'Gestion de tipos de inventarios','descripcion' => 'menu de inventario','url' => 'gestion-tipos-inventarios','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp5','nombre' => 'Gestion de marcas','descripcion' => 'menu de inventario','url' => 'gestion-de-marcas','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp6','nombre' => 'Gestion de tipos de movimientos','descripcion' => 'menu de inventario','url' => 'gestion-tipos-movimientos','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp7','nombre' => 'Transacciones de inventario','descripcion' => 'menu de inventario','url' => 'gestion-transacciones-inventario','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp8','nombre' => 'Conteo de productos','descripcion' => 'menu de inventario','url' => 'conteo-productos','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp9','nombre' => 'Gestion de transportistas','descripcion' => 'menu de inventario','url' => 'gestion-de-transportistas','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp10','nombre' => 'gestion de propiedades','descripcion' => 'menu de gestion de inventario','url' => 'gestion-de-propiedades','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp11','nombre' => 'Consulta existencias por almacenes','descripcion' => 'menu de gestion de inventario','url' => 'gestion-existencias-almacenes','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp12','nombre' => 'Gestion de liquidacion de mercancias','descripcion' => 'menu de gestion de inventario','url' => 'gestion-liquidacion-mercancias','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 4,'status' => 1,'codigo' => 'invp13','nombre' => 'Costo Standard','descripcion' => 'menu de gestion de inventario','url' => 'gestion-costo-standard','estado' => 'ACTIVO'],

            // MODULO DE VENTAS
            ['id_menu' => 1,'modulo' => 5,'status' => 1,'codigo' => 'vep1','nombre' => 'Interfaz de ventas','descripcion' => 'modulo de ventas','url' => 'interfaz-ventas','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 5,'status' => 1,'codigo' => 'vep2','nombre' => 'Generacion formulario 607','descripcion' => 'Modulo ventas','url' => 'generacion_formulario_607','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 5,'status' => 1,'codigo' => 'vep3','nombre' => 'Ofertas y Promociones','descripcion' => 'Modulo ventas','url' => 'ofertas-promociones','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 5,'status' => 1,'codigo' => 'vep4','nombre' => 'Gestion de clientes','descripcion' => 'Modulo ventas','url' => 'gestion-de-clientes','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 5,'status' => 1,'codigo' => 'vep5','nombre' => 'gestion ordenes de pedidos','descripcion' => 'Modulo ventas','url' => 'gestion-de-ordenes-de-pedidos','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 5,'status' => 1,'codigo' => 'vep6','nombre' => 'gestion de cotizaciones','descripcion' => 'Modulo ventas','url' => 'gestion-de-cotizaciones','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 5,'status' => 1,'codigo' => 'vep7','nombre' => 'Condiciones de pago','descripcion' => 'modulo de ventas','url' => 'condiciones-de-pago','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 5,'status' => 1,'codigo' => 'vep8','nombre' => 'Gestion de Recepcion de Vehiculos','descripcion' => 'modulo de ventas','url' => 'gestion-recepcion-vehiculos','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 5,'status' => 1,'codigo' => 'vep9','nombre' => 'Acto de descargo','descripcion' => 'modulo de ventas','url' => 'acto-descargo','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 5,'status' => 1,'codigo' => 'vep10','nombre' => 'Tabla de amortizaciones','descripcion' => 'modulo de ventas','url' => 'tabla-amortizaciones','estado' => 'ACTIVO'],

            // MODULO DE COMPRAS
            ['id_menu' => 1,'modulo' => 6,'status' => 1,'codigo' => 'comp1','nombre' => 'Gestion de ordenes de compras','descripcion' => 'menu de compras','url' => 'gestion-de-ordenes-compras','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 6,'status' => 1,'codigo' => 'comp2','nombre' => 'Gestion de proveedores','descripcion' => 'menu de compras','url' => 'gestion-de-proveedores','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 6,'status' => 1,'codigo' => 'comp3','nombre' => 'Gestion de requisiciones','descripcion' => 'menu de compras','url' => 'gestion-de-requisiciones','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 6,'status' => 1,'codigo' => 'comp4','nombre' => 'Gestion de puertos','descripcion' => 'menu de compras','url' => 'gestion-de-puertos','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 6,'status' => 1,'codigo' => 'comp5','nombre' => 'Gestion de direcciones de envio','descripcion' => 'menu de compras','url' => 'gestion-direcciones-envio','estado' => 'ACTIVO'],
            ['id_menu' => 2,'modulo' => 6,'status' => 1,'codigo' => 'comr1','nombre' => 'Catalogo de proveedores','descripcion' => 'menu de compras','url' => 'catalogo-de-proveedores','estado' => 'ACTIVO'],

            //MODULO DE CONTABILIDAD GENERAL
            ['id_menu' => 1,'modulo' => 7,'status' => 1,'codigo' => 'cgp1','nombre' => 'gestion del catalogo cuentas','descripcion' => 'menu de contabilidad general','url' => 'gestion-catalogo-cuentas','estado' => 'ACTIVO'],
            ['id_menu' => 2,'modulo' => 7,'status' => 1,'codigo' => 'cgr2','nombre' => 'Diario General','descripcion' => 'menu de contabilidad general','url' => 'reporte-diario-general','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 7,'status' => 1,'codigo' => 'cgp3','nombre' => 'periodo fiscales','descripcion' => 'menu de contabilidad general','url' => 'gestion-periodos-fiscales','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 7,'status' => 1,'codigo' => 'cgp4','nombre' => 'Entradas de diario','descripcion' => 'menu de contabilidad general','url' => 'gestion-entradas-diario','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 7,'status' => 1,'codigo' => 'cgp5','nombre' => 'Transacciones de pago','descripcion' => 'menu de contabilidad general','url' => 'gestion-transacciones-pago','estado' => 'ACTIVO'],
            ['id_menu' => 2,'modulo' => 7,'status' => 1,'codigo' => 'cgr10','nombre' => 'Reporte Catalogo Cuentas','descripcion' => 'Imprime Carta de cuentas','url' => 'reporte-catalogo','estado' => 'ACTIVO'],
            ['id_menu' => 2,'modulo' => 7,'status' => 1,'codigo' => 'cgr6','nombre' => 'Gastos por departamento','descripcion' => 'menu de contabilidad general','url' => 'gastos-departamento','estado' => 'ACTIVO'],
            ['id_menu' => 2,'modulo' => 7,'status' => 1,'codigo' => 'cgr7','nombre' => 'reporte mayor general','descripcion' => 'menu de contabilidad general','url' => 'reporte-mayor-general','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 7,'status' => 1,'codigo' => 'cgr8','nombre' => 'Cuadre de caja','descripcion' => 'menu de contabilidad general','url' => 'cuadre-caja','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 7,'status' => 1,'codigo' => 'cgr9','nombre' => 'Gestion Codigos Estados Financieros','descripcion' => 'Adiciona, Modifica identificador punto Estaods','url' => 'gestion-estados','estado' => 'ACTIVO'],

            //MODULO DE ENTRADAS AUTOMATICAS
            ['id_menu' => 1,'modulo' => 8,'status' => 1,'codigo' => 'entp1','nombre' => 'Cobros','descripcion' => 'menu de entradas automaticas','url' => 'cobros','estado' => 'ACTIVO'],

            //MODULO DE RECURSOS HUMANOS
            ['id_menu' => 1,'modulo' => 9,'status' => 1,'codigo' => 'hrp1','nombre' => 'Gestion de empleados','descripcion' => 'Modulo RR.HH','url' => 'gestion-de-empleados','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 9,'status' => 1,'codigo' => 'hrp2','nombre' => 'Gestion de puestos','descripcion' => 'Modulo RR.HH','url' => 'gestion-de-puestos','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 9,'status' => 1,'codigo' => 'hrp3','nombre' => 'Gestion de departamentos','descripcion' => 'Modulo RR.HH','url' => 'gestion-de-departamentos','estado' =>'ACTIVO'],
            ['id_menu' => 1,'modulo' => 9,'status' => 1,'codigo' => 'hrp4','nombre' => 'gestion de turnos','descripcion' => 'menu de gestion de la empresa','url' => 'gestion-tipo-turnos','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 9,'status' => 1,'codigo' => 'hrp5','nombre' => 'gestion de areas empresa','descripcion' => 'menu de gestion de la empresa','url' => 'gestion-de-areas','estado' => 'ACTIVO'],

            //MODULO CUENTAS POR PAGAR
            ['id_menu' => 2,'modulo' => 10,'status' => 1,'codigo' => 'cpp1','nombre' => 'Analisis de Saldo','descripcion' => 'Modulo Cuentas por pagar','url' => 'reporte-analisis-saldo','estado' =>'ACTIVO'],
            ['id_menu' => 1,'modulo' => 10,'status' => 1,'codigo' => 'cpp2','nombre' => 'Facturas de proveedores','descripcion' => 'Modulo Cuentas por pagar','url' => 'gestion-factura-proveedores','estado' => 'ACTIVO'],
            ['id_menu' => 1,'modulo' => 10,'status' => 1,'codigo' => 'cpp3','nombre' => 'Gestion documentos(ND, NC)','descripcion' => 'Modulo Cuentas por pagar','url' => 'gestion-documentos-ndnc','estado' => 'ACTIVO'],


            //MODULO PLAZA ONLINE
            ['id_menu' => 1,'modulo' => 11,'status' => 1,'codigo' => 'tpo1','nombre' => 'Creacion de productos tienda','descripcion' => 'Modulo creacion de productos','url' => 'creacion-productos-plaza','estado' =>'ACTIVO']
        );

        foreach ($menues as $key => $value) {
            Menu::create($value);
        }
    }
}
