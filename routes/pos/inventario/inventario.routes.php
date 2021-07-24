<?php

use Illuminate\Support\Facades\Route;

    // PRODUCTOS EN EL INVENTARIO
    Route::post('/act/productos/{id}', 'inventario\InvProductosController@updateProducts');
    Route::get('/noexistencia/invproductos', 'inventario\InvProductosController@indexSinExistencia');
    Route::get('/busqueda/invproductos', 'inventario\InvProductosController@busqueda');
    Route::get('/busqueda/invproducto', 'inventario\InvProductosController@busquedaTitulo');
    Route::get('/autollenado/invproducto', 'inventario\InvProductosController@autoLlenado');
    Route::get('/tipo/invproducto', 'inventario\InvProductosController@tiposProductos');
    Route::get('/medidas/invproducto', 'inventario\InvProductosController@medidasProductos');
    Route::get('/propiedades/invproducto', 'inventario\InvProductosController@propiedadesProductos');
    Route::get('/invproductos-movil', 'inventario\InvProductosController@indexMovil');
    Route::apiresource('/invproductos', 'inventario\InvProductosController');

    // BODEGAS
    Route::get('/busqueda/bodega', 'inventario\BodegasController@busquedaBodega');
    Route::get('/autollenado/bodega/{email}', 'inventario\BodegasController@autoLlenado');
    Route::get('/usuarios/bodega/{bodega}', 'inventario\BodegasController@usuariosPermisosBodegas');
    Route::get('/bodegas-usuarios/{email}', 'inventario\BodegasController@usuarioConPermisosBodegas');
    Route::post('/permisos/bodegas', 'inventario\BodegasController@concederPermisosBodega');
    Route::apiresource('/bodegas', 'inventario\BodegasController');

    //Secciones
    Route::get('/invseccion/bodega/{id}','inventario\InvseccionController@seccionporbodega');
    Route::apiresource('/invseccion','inventario\InvseccionController');

    //Tramos
    Route::apiresource('/invtramos','inventario\InvTramosController');

    // MARCAS
    Route::get('/busqueda/marca', 'inventario\BrandsController@busqueda');
    Route::apiresource('/marca', 'inventario\BrandsController');

    // CATEGORIAS
    Route::get('/busqueda/categoria', 'inventario\CategoriasController@busqueda');
    Route::apiresource('/categorias', 'inventario\CategoriasController');

    // EXISTENCIAS POR ALMACEN
    Route::post('/existencias-almacen', 'inventario\ExistenciasAlmacenController@existenciasAlmacen');
    Route::get('/existencias-almacen', 'inventario\ExistenciasAlmacenController@autoLlenado');

    //PROPIEDADES
    Route::get('/busqueda/propiedades', 'inventario\inv_PropiedadesController@busqueda');
    Route::apiresource('/propiedades', 'inventario\inv_PropiedadesController');

    //CATALOGO DE PRODUCTOS
    Route::get('/reportinv/invcatalogo', 'inventario\InvcatalogoController@reportinv');
    Route::apiresource('/invcatalogo', 'inventario\InvcatalogoController');

    // CODIGOS MOVIMIENTOS
    Route::get('/usuarios/movimientos/{id}', 'inventario\Invcodigosmovimientos@permisosMovimiento');
    Route::get('/busqueda/codigosmovimientos', 'inventario\Invcodigosmovimientos@busquedaTipo');
    Route::post('/permisos/movimientos', 'inventario\Invcodigosmovimientos@concederPermisosMovimiento');
    Route::apiresource('/codigosmovimientos', 'inventario\Invcodigosmovimientos');

    //existencia productos
    Route::get('/rexistencia', 'inventario\InvexistenciaController@reportexistencia');
    Route::get('/pdfProductos', 'inventario\InvexistenciaController@pdfcreator')->name('decargarPDFProductos');
    Route::apiresource('/existencia','inventario\InvexistenciaController');

    // LIQUIDACION MERCANCIAS
    Route::get('/liquidaciones/pendientes','inventario\InvLiquidacionMercanciaController@pendientes');
    Route::get('/liquidaciones/autollenado','inventario\InvLiquidacionMercanciaController@autoLLenado');
    Route::apiresource('/liquidaciones','inventario\InvLiquidacionMercanciaController');

    // TIPO DE INVENTARIO
    Route::get('/busqueda/invtipos', 'inventario\InvTiposController@busqueda');
    Route::apiresource('/invtipos', 'inventario\InvTiposController');

    //TRANSACCIONES INVENTARIOS
    Route::post('/recibir/invtransaccion/{id}', 'inventario\invtransacciones@recibirTransaccion');
    Route::get('/busqueda/invtransacciones-pendientes/{id}', 'inventario\invtransacciones@pendientesAlmacen');
    Route::get('/reporte/invtransacciones-descargar', 'inventario\invtransacciones@descargaPDF')->name('descargarPDF');
    Route::get('/reporte/invtransacciones-visualizar/{id}/{email}', 'inventario\invtransacciones@verReporte')->name('verPDF');
    Route::get('/reporte/invtransacciones-visualizar-h', 'inventario\invtransacciones@verReporteH')->name('verPDFh');
    Route::get('/reporte/invtransacciones-xls', 'inventario\invtransacciones@ProductosXLS')->name('xls');
    Route::get('/detalle/transaccion/{id}', 'inventario\invtransacciones@detalleTransaccion');
    Route::get('/consulta-balances/transaccion', 'inventario\invtransacciones@consultaBalances');
    Route::get('/autollenado/invtransacciones', 'inventario\invtransacciones@autollenado');
    Route::apiresource('/invtransacciones', 'inventario\invtransacciones');

    //OPERACION POR MOV
    Route::post('/operacionmov/{parametro}','inventario\invtransacciones@operacionmov');

    //DIAS INVENTARIO
    Route::get('/diasinventario','inventario\invtransacciones@diasInventario');

    // RECEPCION DE VEHICULOS
    Route::post('/recepcion-vehiculos/{id}','inventario\RecepcionVehiculosController@updateRecepcion');
    Route::get('/autollenado/recepcion-vehiculos','inventario\RecepcionVehiculosController@autoLlenado');
    Route::apiresource('/recepcion-vehiculos','inventario\RecepcionVehiculosController');
    