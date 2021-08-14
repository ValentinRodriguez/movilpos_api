<?php

use Illuminate\Support\Facades\Route;

    //MANTENIMIENTO CIUDAD
    Route::get('/ciudad/municipio/{id}','globales\CiudadController@ciudadesPorPais');
    Route::apiresource('/ciudad', 'globales\CiudadController');

    //MANTENIMIENTO MUNICIPIOS
    Route::get('/municipios/region/{id}','globales\MunicipiosController@buscaMunicipios');
    Route::apiresource('/municipios', 'globales\MunicipiosController');


    //MANTENIMIENTO PAISES
    Route::apiresource('/nacionalidades', 'globales\NacionalidadesController');

    //MANTENIMIENTO PAISES
    Route::get('/autollenado/localidades', 'globales\PaisController@localidad');
    Route::apiresource('/pais', 'globales\PaisController');

    // PERFILES
    Route::apiresource('/perfiles', 'globales\PerfilesController');


    //MANTENIMIENTO PROVINCIAS
    Route::get('/provincias/region/{id}', 'globales\ProvinciasController@buscaProvincia');
    Route::apiresource('/provincias', 'globales\ProvinciasController');


    //MANTENIMIENTO REGIONES
    Route::get('/region/pais/{id}','globales\RegionesController@buscaRegion');
    Route::apiresource('/regiones', 'globales\RegionesController');


    // PERMISOS DE USUARIOS
    Route::get('/roles/usuario/{usuario}/{email}', 'globales\RolController@rolUsuario');
    Route::apiresource('/roles', 'globales\RolController');


    //MANTENIMIENTO SECTORES
    Route::get('/sectores/ciudad/{id}','globales\sectoresController@buscaSectores');
    Route::apiresource('/ciudad', 'globales\sectoresController');


    //MANTENIMIENTO ZONAHORARIA
    Route::apiresource('/zonahoraria', 'globales\ZonahorariaController');

    //MENSAJES SMS
    Route::get('/sms/deudores-cctransacciones', 'globales\MensajeriaSMScontroller@send');


    //MENSAJES SMS
    Route::get('/ws/deudores-cctransacciones', 'globales\MensajeriaWScontroller@send');


    // API DE MENUES
    Route::apiresource('/menu', 'globales\MenuController');


    // MODULOS DEL SISTEMA    
    Route::get('/autollenado/permisos', 'globales\ModulosController@autoLlenado');
    Route::apiresource('/modulos', 'globales\ModulosController');

    //MANTENIMIENTO ZONAS LOCALES
    Route::get('/busqueda/zonas', 'globales\ZonasController@busqueda');
    Route::get('/busqueda/zonas-provincias/{id}', 'globales\ZonasController@buscarZonaProvincia');
    Route::apiresource('/zonas', 'globales\ZonasController');