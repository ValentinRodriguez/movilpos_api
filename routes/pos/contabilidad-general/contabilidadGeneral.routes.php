<?php

use Illuminate\Support\Facades\Route;


    // TRANSACCIONES CUENTAS POR COBRAR
    Route::get('/deudores/cctransacciones', 'CcTransaccionesController@avisoPagos');
    Route::apiresource('/cctransacciones', 'CcTransaccionesController');

    // CUENTAS CONTABLES
    Route::get('/busqueda/desc-cgcatalogo', 'cgcatalogocontroller@busquedaDescripcion');
    Route::get('/busqueda/cgcatalogo', 'cgcatalogocontroller@busquedaCatalogo');
    Route::get('/busqueda/codigos-retencion', 'cgcatalogocontroller@codigosRetencion');
    Route::get('/busqueda/cuentas-auxiliares', 'cgcatalogocontroller@cuentasAux');
    Route::apiresource('/cgcatalogo', 'cgcatalogocontroller');

    //ENTRADAS DE DIARIO
    Route::apiresource('/cgentradasdiarios', 'CgEntradasDiarioMasterController');
    Route::get('/ed/secuencia', 'CgEntradasDiarioMasterController@secuencia');
    Route::post('/act/entradas-diario/{id}/{sec}', 'inventario\InvProductosController@update');
    Route::get('/transacciones-cg/verificaentrada', 'CgEntradasDiarioMasterController@verificaEntrada');

    //PERIODOS FISCALES
    Route::post('/restaurar/periodo-fiscal','CgPeriodosFiscalesController@restaurarPeriodo');
    Route::get('/busqueda/periodos-fiscales','CgPeriodosFiscalesController@busqueda');
    Route::apiresource('/periodos-fiscales','CgPeriodosFiscalesController');

    // TRANSACCIONES CONTABILIDAD GENERAL
    Route::get('/autollenado/cgtransacciones', 'CgTransaccionesContablesController@autollenado');
    Route::get('/secuencias/cgtransacciones', 'CgTransaccionesContablesController@secuencias');
    Route::post('/gastos-dep/cgtransacciones', 'CgTransaccionesContablesController@gastosPorDepartamentos');
    Route::post('/mayor-general/cgtransacciones', 'CgTransaccionesContablesController@mayorGeneral');
    Route::apiresource('/cgtransacciones', 'CgTransaccionesContablesController');

    //Costos
    Route::apiresource('/costos','compras\CostosController');

    //CUADRE CAJA
    Route::get('/autollenado/cuadre-caja', 'CuadreCajaController@autollenado');
    Route::get('/busqueda/cuadre-caja', 'CuadreCajaController@busqueda');
    Route::apiresource('/cuadre-caja', 'CuadreCajaController');