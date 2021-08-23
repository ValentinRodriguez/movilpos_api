<?php

use Illuminate\Support\Facades\Route;

    // REPORTE ANALISIS SALDOS PENDIENTES
    Route::get('/reporte/analisis-cxp', 'cuentasXpagar\CpAnalisisSaldoPendienteController@reporte');

    // FACTURAS PROVEEDORES
    Route::get('/autollenado/transacciones-cxp', 'cuentasXpagar\CpTransaccionesController@autollenado');
    Route::get('/busqueda/transacciones-cxp', 'cuentasXpagar\CpTransaccionesController@busqueda');
    Route::get('/transacciones-cxp/verificancf', 'cuentasXpagar\CpTransaccionesController@verificaNCF');
    Route::get('/facturas-pendientes/transacciones-cxp', 'cuentasXpagar\CpTransaccionesController@facturasPendientes');
    Route::apiresource('/transacciones-cxp', 'cuentasXpagar\CpTransaccionesController');
    Route::apiresource('/gestion-documentos-ndnc', 'cuentasXpagar\CpGestionDocNcndController');