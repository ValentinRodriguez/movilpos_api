<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// RUTAS DEL LOGIN NUEVAMENTE
Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::get('/busqueda/ordenescompras/{orden}', 'CoOrdenesMasterController@buscaOrdenCompra');

// Route::group([
//     'middleware' => ['isLogged']
// ], function ($router) { 
//     Route::apiresource('/invproductos', 'InvProductosController');
// });

Route::group([
    'middleware' => ['jwt.auth','isLogged']
], function ($router) {   
    Route::post('usuario-logado', 'AuthController@getAuthUser');
    Route::post('desactivar', 'AuthController@unLockLogin');
    Route::post('signup', 'AuthController@signup');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('cambia', 'AuthController@cambia');
    Route::post('act/usuario/{id}', 'AuthController@actualizar');
    Route::post('me', 'AuthController@me');

    // PRODUCTOS EN EL INVENTARIO
    Route::post('/act/productos/{id}', 'InvProductosController@updateProducts');
    Route::get('/noexistencia/invproductos', 'InvProductosController@indexSinExistencia');
    Route::get('/busqueda/invproductos', 'InvProductosController@busqueda');
    Route::get('/busqueda/invproducto', 'InvProductosController@busquedaTitulo');
    Route::get('/autollenado/invproducto', 'InvProductosController@autoLlenado');
    Route::get('/tipo/invproducto', 'InvProductosController@tiposProductos');
    Route::get('/medidas/invproducto', 'InvProductosController@medidasProductos');
    Route::get('/propiedades/invproducto', 'InvProductosController@propiedadesProductos');
    Route::get('/invproductos-movil', 'InvProductosController@indexMovil');
    Route::apiresource('/invproductos', 'InvProductosController');

    //API WOOCOMMERCE
    Route::get('/woocommerce/actprecio/{page}', 'WooCommerceController@getProducts');
    Route::get('/woocommerce/contarprecio/{page}', 'WooCommerceController@countProducts');
    Route::apiresource('/woocommerce', 'WooCommerceController');

    // FACTURAS PROVEEDORES
    // Route::get('/reporte/transacciones-cxp/{id}', 'CoTransaccionesCxpController@verReporte');
    Route::get('/autollenado/transacciones-cxp', 'CoTransaccionesCxpController@autollenado');
    Route::apiresource('/transacciones-cxp', 'CoTransaccionesCxpController');

    // HOME
    Route::get('/autollenado/home', 'Home@autollenado');

    // ACTIVIDADES
    Route::get('/vencimiento/actividades','ActividadesController@ActividadesVencidas');
    Route::apiresource('/actividades','ActividadesController');

    // API DE MENUES
    Route::apiresource('/menu', 'MenuController');

    // INVENTARIOS
    Route::get('/busqueda/invtipos', 'InvTiposController@busqueda');
    Route::apiresource('/invtipos', 'InvTiposController');
    
    // TIPO DE MARCAS
    Route::get('/busqueda/marca', 'BrandsController@busqueda');
    Route::apiresource('/marca', 'BrandsController');

    // CATEGORIAS
    Route::get('/busqueda/categoria', 'CategoriasController@busqueda');
    Route::apiresource('/categorias', 'CategoriasController');

    // CATEGORIAS
    Route::apiresource('/perfiles', 'PerfilesController');

    // PERMISOS DE USUARIOS
    Route::get('/roles/usuario/{usuario}/{email}', 'RolController@rolUsuario');
    Route::apiresource('/roles', 'RolController');



    // REQUISICIONES
    Route::apiresource('/requisiciones', 'RequisicionesMasterController');

    // TRANSACCIONES CONTABLES
    Route::get('/deudores/cctransacciones', 'CcTransaccionesController@avisoPagos');
    Route::apiresource('/cctransacciones', 'CcTransaccionesController');

    //MENSAJES SMS
    Route::get('/sms/deudores-cctransacciones', 'MensajeriaSMScontroller@send');

    //MENSAJES SMS
    Route::get('/ws/deudores-cctransacciones', 'MensajeriaWScontroller@send');

    // DEPARTAMENTOS
    Route::apiresource('/departamentos', 'DepartamentoController');
    Route::get('/busqueda/departamentos', 'DepartamentoController@busqueda');

    // DEPARTAMENTOS
    Route::get('/busqueda/monedas', 'Monedas@busqueda');
    Route::apiresource('/monedas', 'Monedas');

    // BODEGAS
    Route::get('/busqueda/bodega', 'BodegasController@busquedaBodega');
    Route::get('/autollenado/bodega/{email}', 'BodegasController@autoLlenado');
    Route::get('/usuarios/bodega/{bodega}', 'BodegasController@usuariosPermisosBodegas');
    Route::get('/bodegas-usuarios/{email}', 'BodegasController@usuarioConPermisosBodegas');
    Route::post('/permisos/bodegas', 'BodegasController@concederPermisosBodega');
    Route::apiresource('/bodegas', 'BodegasController');

    // CODIGOS MOVIMIENTOS
    Route::get('/usuarios/movimientos/{id}', 'Invcodigosmovimientos@permisosMovimiento');
    Route::get('/busqueda/codigosmovimientos', 'Invcodigosmovimientos@busquedaTipo');
    Route::post('/permisos/movimientos', 'Invcodigosmovimientos@concederPermisosMovimiento');
    Route::apiresource('/codigosmovimientos', 'Invcodigosmovimientos');

    // CUENTAS CONTABLES
    Route::get('/busqueda/desc-cgcatalogo', 'cgcatalogocontroller@busquedaDescripcion');
    Route::get('/busqueda/cgcatalogo', 'cgcatalogocontroller@busquedaCatalogo');
    Route::get('/busqueda/codigos-retencion', 'cgcatalogocontroller@codigosRetencion');
    Route::get('/busqueda/cuentas-auxiliares', 'cgcatalogocontroller@cuentasAux');
    Route::apiresource('/cgcatalogo', 'cgcatalogocontroller');

    //ENTRADAS DE DIARIO
    Route::apiresource('/cgentradasdiarios', 'CgEntradasDiarioMasterController');
    Route::get('/ed/secuencia', 'CgEntradasDiarioMasterController@secuencia');

    // MODULOS DEL SISTEMA
    Route::apiresource('/modulos', 'ModulosController');

    // MANTENIMINETO DE CLIENTES
    Route::get('/busqueda/mclientes', 'MclientesController@busqueda');
    Route::get('/autollenado/clientes', 'MclientesController@autollenado');
    Route::apiresource('/mclientes', 'MclientesController');

    //MANTENIMIENTO PAISES
    Route::apiresource('/pais', 'PaisController');

    //MANTENIMIENTO PAISES
    Route::get('/busqueda/condiciones-pago', 've_CondicionesPagoController@condPagos');
    Route::apiresource('/condiciones-pago', 've_CondicionesPagoController');

    //MANTENIMIENTO ZONAHORARIA
    Route::apiresource('/zonahoraria', 'ZonahorariaController');

    //MANTENIMIENTO ZONAS LOCALES
    Route::apiresource('/zonas', 'ZonasController');

    //tipo negocio
    Route::apiresource('/negocio', 'TipoNegocioController');

    //tipo documento
    Route::apiresource('/documento', 'TipoDocumentoController');

    //PROPIEDADES
    Route::get('/busqueda/propiedades', 'inv_PropiedadesController@busqueda');
    Route::apiresource('/propiedades', 'inv_PropiedadesController');

    //MANTENIMIENTO CIUDAD
    Route::get('/ciudad/pais/{id}','CiudadController@ciudadesPorPais');
    Route::apiresource('/ciudad', 'CiudadController');

    //MANTENIMIENTO DE LOS DATOS DE LA EMPRESA
    Route::post('/act/empresa/{id}', 'EmpresaController@actualizar');
    Route::get('/recibimientos/empresa', 'EmpresaController@recibimientos');
    Route::get('/busqueda/empresa', 'EmpresaController@busqueda');
    Route::apiresource('/empresa', 'EmpresaController');

    //PUERTOS
    Route::get('/busqueda/puerto', 'CoPuertoController@busqueda');
    Route::apiresource('/puertos', 'CoPuertoController');

    // Puestos
    Route::get('/busqueda/nopuestos', 'NopuestoController@busqueda');
    Route::apiresource('/nopuestos', 'NopuestoController');

    // TIPO CLIENTES
    Route::get('/busqueda/tipoclientes', 'tipoClientesController@busquedaTipo');
    Route::apiresource('/tipoclientes', 'tipoClientesController');

    // TIPO NEGOCIO
    Route::get('/busqueda/tiponegocios', 'TipoNegocioController@busquedaTipo');
    Route::apiresource('/tiponegocios', 'TipoNegocioController');

    // TRANSPORTISTAS
    Route::get('/busqueda/transportistas', 'TransportistasController@busquedaTransportista');
    Route::apiresource('/transportistas', 'TransportistasController');

    // DIRECCIONES DE ENVIO
    Route::get('/busqueda/direcciones', 'CoDireccionesEnvioController@busqueda');
    Route::apiresource('/direccion-envio', 'CoDireccionesEnvioController');

    // EMPLEADOS
    Route::get('/busqueda/vendedores', 'noempleadosController@buscaVendedores');
    Route::get('/busqueda/supervisores/{id}', 'noempleadosController@buscaSupervisores');
    Route::get('/autollenado/empleados', 'noempleadosController@autollenado');
    Route::apiresource('/noempleados', 'noempleadosController');

    // Facturas
    Route::get('/busqueda/factura/{factura}', 'VefacturasController@buscaFactura');
    Route::apiresource('/vefacturas', 'vefacturasController');

    //TRANSACCIONES INVENTARIOS
    Route::post('/recibir/invtransaccion/{id}', 'invtransacciones@recibirTransaccion');
    Route::get('/busqueda/invtransacciones-pendientes/{id}', 'invtransacciones@pendientesAlmacen');
    Route::get('/reporte/invtransacciones-descargar', 'invtransacciones@descargaPDF')->name('descargarPDF');
    Route::get('/reporte/invtransacciones-visualizar/{id}/{email}', 'invtransacciones@verReporte')->name('verPDF');
    Route::get('/reporte/invtransacciones-visualizar-h', 'invtransacciones@verReporteH')->name('verPDFh');
    Route::get('/reporte/invtransacciones-xls', 'invtransacciones@ProductosXLS')->name('xls');
    Route::get('/detalle/transaccion/{id}', 'invtransacciones@detalleTransaccion');
    Route::get('/autollenado/invtransacciones', 'invtransacciones@autollenado');
    Route::apiresource('/invtransacciones', 'invtransacciones');

    //CATALOGO DE PRODUCTOS
    Route::get('/reportinv/invcatalogo', 'InvcatalogoController@reportinv');

    //PROVEEDORES
    Route::get('/busqueda/proveedores', 'proveedoresController@busquedaTitulo');
    Route::get('/autollenado/proveedores', 'proveedoresController@autollenado');
    Route::apiresource('/proveedores', 'proveedoresController');

    //TIPO PROVEEDORES
    Route::get('/busqueda/tipo-proveedor', 'CoTipoProveedoresController@busqueda');
    Route::apiresource('/tipo-proveedores', 'CoTipoProveedoresController');

    //ORDENES DE COMPRAS
    // Route::get('/busqueda/ordenescompras/{orden}', 'CoOrdenesMasterController@buscaOrdenCompra');
    Route::get('/autollenado/ordenescompras', 'CoOrdenesMasterController@autollenado');
    Route::post('/actualizarcompras/{id}', 'CoOrdenesMasterController@actualizar');
    Route::get('/reporte/orden-compras/{id}', 'CoOrdenesMasterController@verReporte')->name('verPDF');
    Route::get('/reporte/orden-comprash/{id}', 'CoOrdenesMasterController@verReporteH')->name('verPDFh');
    Route::apiresource('/ordenescompras', 'CoOrdenesMasterController');

    //ORDENES DE PEDIDOS
    Route::get('/busqueda/orden-pedido/{orden}', 'OrdenPedidoMasterController@buscaOrden');
    Route::apiresource('/ordenespedidos', 'OrdenPedidoMasterController');

    //reporte de entrada
    Route::get('/reportcost/entradasalidas', 'EntradasSalidasController@reportcost');

    //OPERACION POR MOV
    Route::post('/operacionmov/{parametro}','invtransacciones@operacionmov');

    //DIAS INVENTARIO
    Route::get('/diasinventario','invtransacciones@diasInventario');

    //Secciones
    Route::get('/invseccion/bodega/{id}','InvseccionController@seccionporbodega');
    Route::apiresource('/invseccion','InvseccionController');

    //Tramos
    Route::apiresource('/invtramos','InvTramosController');

    //tipo cliente
    //Route::apiresource('/vendedor','VendedorController');

    //existencia productos
    Route::get('/rexistencia', 'InvexistenciaController@reportexistencia');
    Route::get('/pdfProductos', 'InvexistenciaController@pdfcreator')->name('decargarPDFProductos');
    Route::apiresource('/existencia','InvexistenciaController');

    //PERIODOS FISCALES
    Route::post('/restaurar/periodo-fiscal','CgPeriodosFiscalesController@restaurarPeriodo');
    Route::get('/busqueda/periodos-fiscales','CgPeriodosFiscalesController@busqueda');
    Route::apiresource('/periodos-fiscales','CgPeriodosFiscalesController');

    //Costos
    Route::apiresource('/costos','CostosController');

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
});
