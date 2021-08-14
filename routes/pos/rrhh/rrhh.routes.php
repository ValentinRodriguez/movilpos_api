<?php

use Illuminate\Support\Facades\Route;

   // EMPLEADOS
   Route::get('/busqueda/cedula', 'rrhh\noempleadosController@buscaCedula');
   Route::get('/busqueda/cajeros', 'rrhh\noempleadosController@cajeros');
   Route::get('/busqueda/vendedores', 'rrhh\noempleadosController@buscaVendedores');
   Route::get('/busqueda/supervisores/{id}', 'rrhh\noempleadosController@buscaSupervisores');
   Route::get('/autollenado/empleados', 'rrhh\noempleadosController@autollenado');
   Route::get('/bancos', 'rrhh\noempleadosController@bancos');
   Route::apiresource('/noempleados', 'rrhh\noempleadosController');

   //AREAS EMPRESA        
   Route::get('/busqueda/areas-empresa', 'rrhh\AreasEmpresaController@busqueda');
   Route::get('/autollenado/areas-empresa', 'rrhh\AreasEmpresaController@autollenado');
   Route::apiresource('/areas-empresa', 'rrhh\AreasEmpresaController');
   Route::apiresource('/areas', 'rrhh\AreasEmpresaController');

   // DEPARTAMENTOS
   Route::get('/busqueda/departamentos', 'rrhh\DepartamentoController@busqueda');
   Route::apiresource('/departamentos', 'rrhh\DepartamentoController');

   // Puestos    
   Route::get('/busqueda/nopuestos', 'rrhh\NopuestoController@busqueda');
   Route::apiresource('/nopuestos', 'rrhh\NopuestoController');

   // TURNOS
   Route::get('/busqueda/turnos', 'rrhh\TurnosController@busqueda');
   Route::apiresource('/turnos', 'rrhh\TurnosController');

   //reporte de entrada
   Route::get('/reportcost/entradasalidas', 'rrhh\EntradasSalidasController@reportcost');