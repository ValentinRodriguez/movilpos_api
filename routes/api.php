<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// RUTAS DEL LOGIN NUEVAMENTE
Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');

// Route::group([
//     'middleware' => ['isLogged']
// ], function ($router) { 
//     Route::apiresource('/invproductos', 'InvProductosController');
// });

// Route::group([
//     'middleware' => ['jwt.auth']
// ], function ($router) {   
    Route::post('usuario-logado', 'AuthController@getAuthUser');
    Route::post('desactivar', 'AuthController@unLockLogin');
    Route::post('signup', 'AuthController@signup');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('cambia', 'AuthController@cambia');
    Route::post('act/usuario/{id}', 'AuthController@actualizar');
    Route::post('me', 'AuthController@me');

    // DGII
    Route::get('/busqueda/dgii-rnc', 'DgiiController@busqueda');
    Route::get('/formulario606/dgii-rnc', 'DgiiController@formulario606');
    Route::apiResource('/dgii-rnc', 'DgiiController');
    
    //API WOOCOMMERCE
    Route::get('/woocommerce/actprecio/{page}', 'WooCommerceController@getProducts');
    Route::get('/woocommerce/contarprecio/{page}', 'WooCommerceController@countProducts');
    Route::apiresource('/woocommerce', 'WooCommerceController');

    // FACTURAS PROVEEDORES
    Route::get('/autollenado/transacciones-cxp', 'CpTransaccionesController@autollenado');
    Route::get('/busqueda/transacciones-cxp', 'CpTransaccionesController@busqueda');
    Route::get('/transacciones-cxp/verificancf', 'CpTransaccionesController@verificaNCF');
    Route::get('/facturas-pendientes/transacciones-cxp', 'CpTransaccionesController@facturasPendientes');
    Route::get('/reporte/analisis-cxp', 'CpAnalisisSaldoPendienteController@reporte');
    Route::apiresource('/transacciones-cxp', 'CpTransaccionesController');
    
    // HOME
    Route::get('/autollenado/home', 'Home@autollenado');

    // ACTIVIDADES
    Route::get('/vencimiento/actividades','ActividadesController@ActividadesVencidas');
    Route::apiresource('/actividades','ActividadesController');

    // API DE MENUES
    Route::apiresource('/menu', 'MenuController');

    
    // TIPO DE INVENTARIO
    Route::get('/busqueda/areas-empresa', 'AreasEmpresaController@busqueda');
    Route::get('/autollenado/areas-empresa', 'AreasEmpresaController@autollenado');
    Route::apiresource('/areas-empresa', 'AreasEmpresaController');

    // TURNOS
    Route::get('/busqueda/turnos', 'TurnosController@busqueda');
    Route::apiresource('/turnos', 'TurnosController');





    // PERFILES
    Route::apiresource('/perfiles', 'PerfilesController');

    // PERMISOS DE USUARIOS
    Route::get('/roles/usuario/{usuario}/{email}', 'RolController@rolUsuario');
    Route::apiresource('/roles', 'RolController');






    //MENSAJES SMS
    Route::get('/sms/deudores-cctransacciones', 'MensajeriaSMScontroller@send');

    //MENSAJES SMS
    Route::get('/ws/deudores-cctransacciones', 'MensajeriaWScontroller@send');

    // DEPARTAMENTOS
    Route::get('/busqueda/departamentos', 'DepartamentoController@busqueda');
    Route::apiresource('/departamentos', 'DepartamentoController');

    // MONEDAS
    Route::get('/busqueda/monedas', 'Monedas@busqueda');
    Route::apiresource('/monedas', 'Monedas');









    // MODULOS DEL SISTEMA    
    Route::get('/autollenado/permisos', 'ModulosController@autoLlenado');
    Route::apiresource('/modulos', 'ModulosController');

    // MANTENIMINETO DE CLIENTES
    Route::get('/busqueda/mclientes', 'MclientesController@busqueda');
    Route::get('/autollenado/clientes', 'MclientesController@autollenado');
    Route::apiresource('/mclientes', 'MclientesController');

    //MANTENIMIENTO PAISES
    Route::get('/autollenado/localidades', 'PaisController@localidad');
    Route::apiresource('/pais', 'PaisController');

    //MANTENIMIENTO PAISES
    Route::apiresource('/nacionalidades', 'NacionalidadesController');

    //MANTENIMIENTO PAISES
    Route::get('/busqueda/condiciones-pago', 've_CondicionesPagoController@condPagos');
    Route::apiresource('/condiciones-pago', 've_CondicionesPagoController');


    //AREAS EMPRESA    
    Route::apiresource('/areas', 'AreasEmpresaController');



    //MANTENIMIENTO ZONAHORARIA
    Route::apiresource('/zonahoraria', 'ZonahorariaController');

    //MANTENIMIENTO ZONAS LOCALES
    Route::get('/busqueda/zonas', 'ZonasController@busqueda');
    Route::get('/busqueda/zonas-provincias/{id}', 'ZonasController@buscarZonaProvincia');
    Route::apiresource('/zonas', 'ZonasController');

    // sucursales
    Route::get('/busqueda/sucursales/{id}', 'sucursalesController@sucursalXempresa');
    Route::get('/busqueda/sucursales', 'sucursalesController@busqueda');
    Route::get('/autollenado-empresa', 'sucursalesController@autollenado');
    Route::apiresource('/sucursales', 'sucursalesController');

    //MANTENIMIENTO PROVINCIAS
    Route::get('/provincias/region/{id}', 'ProvinciasController@buscaProvincia');
    Route::apiresource('/provincias', 'ProvinciasController');

    //tipo negocio
    Route::apiresource('/negocio', 'TipoNegocioController');

    //tipo documento
    Route::apiresource('/documento', 'TipoDocumentoController');



    //MANTENIMIENTO CIUDAD
    Route::get('/ciudad/municipio/{id}','CiudadController@ciudadesPorPais');
    Route::apiresource('/ciudad', 'CiudadController');

    //MANTENIMIENTO REGIONES
    Route::get('/region/pais/{id}','RegionesController@buscaRegion');
    Route::apiresource('/regiones', 'RegionesController');

    //MANTENIMIENTO MUNICIPIOS
    Route::get('/municipios/region/{id}','MunicipiosController@buscaMunicipios');
    Route::apiresource('/municipios', 'MunicipiosController');
    
    //MANTENIMIENTO SECTORES
    Route::get('/sectores/ciudad/{id}','sectoresController@buscaSectores');
    Route::apiresource('/ciudad', 'sectoresController');

    //MANTENIMIENTO DE LOS DATOS DE LA EMPRESA
    Route::post('/act/empresa/{id}', 'EmpresaController@actualizar');
    Route::get('/recibimientos/empresa', 'EmpresaController@recibimientos');
    Route::get('/busqueda/empresa', 'EmpresaController@busqueda');
    Route::get('/permisos-empresa', 'EmpresaController@permisosEmpresaValor');
    Route::get('/autollenado/permisos-empresa', 'EmpresaController@AutoLlenadoPermisosEmpresa');    
    Route::post('/permisos-empresa', 'EmpresaController@guardarPermisosEmpresa');
    Route::apiresource('/empresa', 'EmpresaController');

  

    // Puestos    
    Route::get('/busqueda/nopuestos', 'NopuestoController@busqueda');
    Route::apiresource('/nopuestos', 'NopuestoController');

    // TIPO CLIENTES
    Route::get('/busqueda/tipoclientes', 'tipoClientesController@busquedaTipo');
    Route::apiresource('/tipoclientes', 'tipoClientesController');

    // TIPO NEGOCIO
    Route::get('/busqueda/tiponegocios', 'TipoNegocioController@busquedaTipo');
    Route::apiresource('/tiponegocios', 'TipoNegocioController');





    // EMPLEADOS
    Route::get('/busqueda/cedula', 'noempleadosController@buscaCedula');
    Route::get('/busqueda/cajeros', 'noempleadosController@cajeros');
    Route::get('/busqueda/vendedores', 'noempleadosController@buscaVendedores');
    Route::get('/busqueda/supervisores/{id}', 'noempleadosController@buscaSupervisores');
    Route::get('/autollenado/empleados', 'noempleadosController@autollenado');
    Route::get('/bancos', 'noempleadosController@bancos');
    Route::apiresource('/noempleados', 'noempleadosController');

    // Facturas
    Route::get('/busqueda/factura/{factura}', 'VefacturasController@buscaFactura');
    Route::apiresource('/vefacturas', 'vefacturasController');
    














    //reporte de entrada
    Route::get('/reportcost/entradasalidas', 'EntradasSalidasController@reportcost');



    //Secciones
    Route::get('/invseccion/bodega/{id}','inventario\InvseccionController@seccionporbodega');
    Route::apiresource('/invseccion','inventario\InvseccionController');

    //Tramos
    Route::apiresource('/invtramos','inventaro\InvTramosController');

    //tipo cliente
    //Route::apiresource('/vendedor','VendedorController');







    //tipo de ventas
    Route::apiresource('/tipove','VentasController');

    //recepcion vehiculo
    Route::apiresource('/recepcion','VerecepcionMasterController');

    //Ruta Users
    // Route::get('users','AuthController@index');
    Route::get('users/{id}','AuthController@show');
    Route::get('busqueda/users','AuthController@busqueda');
    Route::get('busqueda/username','AuthController@busquedaUsuario');
    Route::get('busqueda/email','AuthController@busquedaEmail');
    Route::get('busqueda/numemp','AuthController@busquedaNumEmp');
    Route::apiresource('users','AuthController');
// });
