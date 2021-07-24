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
    Route::get('/busqueda/puerto', 'compras\CoPuertoController@busqueda');
    Route::apiresource('/puertos', 'compras\CoPuertoController');

    //TIPO PROVEEDORES
    Route::get('/busqueda/tipo-proveedor', 'compras\CoTipoProveedoresController@busqueda');
    Route::apiresource('/tipo-proveedores', 'compras\CoTipoProveedoresController');

    //ORDENES DE PEDIDOS
    Route::get('/busqueda/orden-pedido/{orden}', 'compras\OrdenPedidoMasterController@buscaOrden');
    Route::apiresource('/ordenespedidos', 'compras\OrdenPedidoMasterController');

    //PROVEEDORES
    Route::get('/busqueda/proveedores', 'compras\proveedoresController@busquedaTitulo');
    Route::get('/autollenado/proveedores', 'compras\proveedoresController@autollenado');
    Route::post('/proveedores/catalogo', 'compras\proveedoresController@catalogoProveedores');    
    Route::apiresource('/proveedores', 'compras\proveedoresController');

    // REQUISICIONES
    Route::apiresource('/requisiciones', 'compras\RequisicionesMasterController');

    // TRANSPORTISTAS
    Route::get('/busqueda/transportistas', 'compras\TransportistasController@busquedaTransportista');
    Route::apiresource('/transportistas', 'compras\TransportistasController');