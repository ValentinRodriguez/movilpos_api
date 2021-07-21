
<?php

use Illuminate\Support\Facades\Route;

 // MANTENIMINETO DE CLIENTES
 Route::get('/busqueda/mclientes', 'ventas\MclientesController@busqueda');
 Route::get('/autollenado/clientes', 'ventas\MclientesController@autollenado');
 Route::apiresource('/mclientes', 'ventas\MclientesController');
 
     
 //MANTENIMIENTO CONDICIONES DE PAGO
 Route::get('/busqueda/condiciones-pago', 'ventas\ve_CondicionesPagoController@condPagos');
 Route::apiresource('/condiciones-pago', 'ventas\ve_CondicionesPagoController');

 
// Facturas
Route::get('/busqueda/factura/{factura}', 'ventas\VefacturasController@buscaFactura');
Route::apiresource('/vefacturas', 'ventas\vefacturasController');

//tipo de ventas
Route::apiresource('/tipoventa','ventas\VentasController');


//recepcion vehiculo
Route::apiresource('/recepcion','ventas\VerecepcionMasterController');