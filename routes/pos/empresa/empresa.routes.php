<?php

use Illuminate\Support\Facades\Route;

    //MANTENIMIENTO DE LOS DATOS DE LA EMPRESA
    Route::post('/act/empresa/{id}', 'empresa\EmpresaController@actualizar');
    Route::get('/recibimientos/empresa', 'empresa\EmpresaController@recibimientos');
    Route::get('/busqueda/empresa', 'empresa\EmpresaController@busqueda');
    Route::get('/permisos-empresa', 'empresa\EmpresaController@permisosEmpresaValor');
    Route::get('/autollenado/permisos-empresa', 'empresa\EmpresaController@AutoLlenadoPermisosEmpresa');    
    Route::post('/permisos-empresa', 'empresa\EmpresaController@guardarPermisosEmpresa');
    Route::apiresource('/empresa', 'empresa\EmpresaController');

    //tipo negocio
    Route::apiresource('/negocio', 'empresa\TipoNegocioController');
    Route::get('/busqueda/tiponegocios', 'empresa\TipoNegocioController@busquedaTipo');
    Route::apiresource('/tiponegocios', 'empresa\TipoNegocioController');

    //tipo documento
    Route::apiresource('/documento', 'empresa\TipoDocumentoController');

    // TIPO CLIENTES
    Route::get('/busqueda/tipoclientes', 'empresa\tipoClientesController@busquedaTipo');
    Route::apiresource('/tipoclientes', 'empresa\tipoClientesController');

    // sucursales
    Route::get('/busqueda/sucursales/{id}', 'empresa\sucursalesController@sucursalXempresa');
    Route::get('/busqueda/sucursales', 'empresa\sucursalesController@busqueda');
    Route::get('/autollenado-empresa', 'empresa\sucursalesController@autollenado');
    Route::apiresource('/sucursales', 'empresa\sucursalesController');

    // MONEDAS
    Route::get('/busqueda/monedas', 'empresa\Monedas@busqueda');
    Route::apiresource('/monedas', 'empresa\Monedas');