<?php

use Illuminate\Support\Facades\Route;


    // TRANSACCIONES CUENTAS POR COBRAR
    Route::get('/deudores/cctransacciones', 'contabilidadGeneral\CcTransaccionesController@avisoPagos');
    Route::apiresource('/cctransacciones', 'contabilidadGeneral\CcTransaccionesController');

    // CUENTAS CONTABLES
    Route::get('/busqueda/desc-cgcatalogo', 'cgcatalogocontroller@busquedaDescripcion');
    Route::get('/busqueda/cgcatalogo', 'cgcatalogocontroller@busquedaCatalogo');
    Route::get('/busqueda/codigos-retencion', 'cgcatalogocontroller@codigosRetencion');
    Route::get('/busqueda/cuentas-auxiliares', 'cgcatalogocontroller@cuentasAux');
    Route::apiresource('/cgcatalogo', 'cgcatalogocontroller');

    //ENTRADAS DE DIARIO
    Route::apiresource('/cgentradasdiarios', 'contabilidadGeneral\CgEntradasDiarioMasterController');
    Route::get('/ed/secuencia', 'contabilidadGeneral\CgEntradasDiarioMasterController@secuencia');
    Route::post('/act/entradas-diario/{id}/{sec}', 'inventario\InvProductosController@update');
    Route::get('/transacciones-cg/verificaentrada', 'contabilidadGeneral\CgEntradasDiarioMasterController@verificaEntrada');

    //PERIODOS FISCALES
    Route::post('/restaurar/periodo-fiscal','contabilidadGeneral\CgPeriodosFiscalesController@restaurarPeriodo');
    Route::get('/busqueda/periodos-fiscales','contabilidadGeneral\CgPeriodosFiscalesController@busqueda');
    Route::apiresource('/periodos-fiscales','contabilidadGeneral\CgPeriodosFiscalesController');

    // TRANSACCIONES CONTABILIDAD GENERAL
    Route::get('/autollenado/cgtransacciones', 'contabilidadGeneral\CgTransaccionesContablesController@autollenado');
    Route::get('/secuencias/cgtransacciones', 'contabilidadGeneral\CgTransaccionesContablesController@secuencias');
    Route::post('/gastos-dep/cgtransacciones', 'contabilidadGeneral\CgTransaccionesContablesController@gastosPorDepartamentos');
    Route::post('/mayor-general/cgtransacciones', 'contabilidadGeneral\CgTransaccionesContablesController@mayorGeneral');
    Route::apiresource('/cgtransacciones', 'contabilidadGeneral\CgTransaccionesContablesController');

    //Costos
    Route::apiresource('/costos','compras\CostosController');

    //CUADRE CAJA
    Route::get('/autollenado/cuadre-caja', 'contabilidadGeneral\CuadreCajaController@autollenado');
    Route::get('/busqueda/cuadre-caja', 'contabilidadGeneral\CuadreCajaController@busqueda');
    Route::apiresource('/cuadre-caja', 'contabilidadGeneral\CuadreCajaController');