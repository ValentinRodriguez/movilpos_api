<?php

use Illuminate\Support\Facades\Route;

    // DIRECCIONES DE ENVIO
    Route::get('/busqueda/direcciones', 'compras\CoDireccionesEnvioController@busqueda');
    Route::apiresource('/direccion-envio', 'compras\CoDireccionesEnvioController');

    //ORDENES DE COMPRAS
    // Route::get('/busqueda/ordenescompras/{orden}', 'compras\CoOrdenesMasterController@buscaOrdenCompra');
    Route::get('/autollenado/ordenescompras', 'compras\CoOrdenesMasterController@autollenado');
    Route::post('/actualizarcompras/{id}', 'compras\CoOrdenesMasterController@actualizar');
    Route::get('/reporte/orden-compras/{id}', 'compras\CoOrdenesMasterController@verReporte')->name('verPDF');
    Route::get('/reporte/orden-comprash/{id}', 'compras\CoOrdenesMasterController@verReporteH')->name('verPDFh');
    Route::get('/busqueda/ordenescompras/{orden}', 'compras\CoOrdenesMasterController@buscaOrdenCompra');
    Route::apiresource('/ordenescompras', 'compras\CoOrdenesMasterController');

    //PUERTOS
    Route::get('/busqueda/puerto', 'CoPuertoController@busqueda');
    Route::apiresource('/puertos', 'CoPuertoController');

    //TIPO PROVEEDORES
    Route::get('/busqueda/tipo-proveedor', 'CoTipoProveedoresController@busqueda');
    Route::apiresource('/tipo-proveedores', 'CoTipoProveedoresController');

    //ORDENES DE PEDIDOS
    Route::get('/busqueda/orden-pedido/{orden}', 'OrdenPedidoMasterController@buscaOrden');
    Route::apiresource('/ordenespedidos', 'OrdenPedidoMasterController');

    //PROVEEDORES
    Route::get('/busqueda/proveedores', 'proveedoresController@busquedaTitulo');
    Route::get('/autollenado/proveedores', 'proveedoresController@autollenado');
    Route::post('/proveedores/catalogo', 'proveedoresController@catalogoProveedores');    
    Route::apiresource('/proveedores', 'proveedoresController');

    // REQUISICIONES
    Route::apiresource('/requisiciones', 'RequisicionesMasterController');

    // TRANSPORTISTAS
    Route::get('/busqueda/transportistas', 'TransportistasController@busquedaTransportista');
    Route::apiresource('/transportistas', 'TransportistasController');