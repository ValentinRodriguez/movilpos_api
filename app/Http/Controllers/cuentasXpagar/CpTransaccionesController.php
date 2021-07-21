<?php

namespace App\Http\Controllers\cuentasXpagar;
use App\Http\Controllers\ApiResponseController;

use App\Librerias\cpTransacciones;
use App\Librerias\cpTransaccionesDetalles;
use App\Librerias\proveedores;
use App\Librerias\coCuentasProveedor;
use App\Librerias\ve_CondicionesPago;
use App\Librerias\tipoMonedas;
use App\Librerias\cgTipoGastos;
use App\Librerias\Departamento;
use App\Librerias\cpTransaccionesHistoriales;
use App\Librerias\cpTransaccionesHistorialesDetalle;
use App\Librerias\cgPeriodosFiscales;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CpTransaccionesController extends ApiResponseController
{
    public function index(Request $request)
    {
        $facturas = cpTransacciones::join('tipo_monedas','tipo_monedas.id','=','cp_transacciones.moneda')->
                                    join('proveedores',[['proveedores.cod_sp','=','cp_transacciones.cod_sp'],['proveedores.cod_sp_sec','=','cp_transacciones.cod_sp_sec']])->
                                    select('cp_transacciones.*','tipo_monedas.descripcion as moneda','tipo_monedas.simbolo','tipo_monedas.divisa','proveedores.nom_sp as proveedor_nombre')->
                                    orderBy('cp_transacciones.created_at', 'desc')->
                                    where([['cp_transacciones.estado','=','ACTIVO'],['cp_transacciones.tipo_doc','=','FT']])->
                                    get();

        foreach ($facturas as $key => $value) {
            $detalle = cpTransaccionesDetalles::leftjoin('nodepartamentos','cp_transacciones_detalles.departamento','=','nodepartamentos.id')->
                                                select('cp_transacciones_detalles.*','nodepartamentos.titulo as departamento_descripcion')->
                                                where([['.cp_transacciones_detalles.estado','=','activo'],
                                                        ['cp_transacciones_detalles.num_doc','=',$value->num_doc]])->
                                                get();
            $value->detalle_factura = $detalle;
        }
        return $this->successResponse($facturas, $request->urlRequest);
    }

    public function facturasPendientes(Request $request)
    {
        $facturas = cpTransacciones::join('tipo_monedas','tipo_monedas.id','=','cp_transacciones.moneda')->
                                    join('proveedores',[['proveedores.cod_sp','=','cp_transacciones.cod_sp'],['proveedores.cod_sp_sec','=','cp_transacciones.cod_sp_sec']])->
                                    select('cp_transacciones.num_doc','cp_transacciones.valor','cp_transacciones.monto_itbi','cp_transacciones.tipo_doc',
                                           'tipo_monedas.descripcion as moneda','tipo_monedas.simbolo','tipo_monedas.divisa',
                                           'proveedores.nom_sp as proveedor_nombre',
                                           DB::Raw('SUM(cp_transacciones.valor) as deuda'))->
                                    groupby('cp_transacciones.num_doc','cp_transacciones.valor','cp_transacciones.monto_itbi','cp_transacciones.tipo_doc',
                                            'tipo_monedas.descripcion','tipo_monedas.simbolo','tipo_monedas.divisa',
                                            'proveedores.nom_sp')->
                                    where([['cp_transacciones.estado','=','ACTIVO'],['cp_transacciones.tipo_doc','=','FT']])->
                                    having('deuda', '>', 0)->
                                    get();
        
        foreach ($facturas as $key => $value) {
            $detalle = cpTransaccionesDetalles::join('nodepartamentos','nodepartamentos.id','=','cp_transacciones_detalles.departamento')->
                                        select('cp_transacciones_detalles.*','nodepartamentos.titulo as departamento_descripcion')->
                                        where([['.cp_transacciones_detalles.estado','=','activo'],
                                                ['cp_transacciones_detalles.num_doc','=',$value->num_doc]])->
                                        get();

            $pagado = cpTransacciones::join('tipo_monedas','tipo_monedas.id','=','cp_transacciones.moneda')->
                                       join('proveedores',[['proveedores.cod_sp','=','cp_transacciones.cod_sp'],['proveedores.cod_sp_sec','=','cp_transacciones.cod_sp_sec']])->
                                       select('cp_transacciones.num_doc',
                                              'tipo_monedas.descripcion as moneda','tipo_monedas.simbolo','tipo_monedas.divisa',
                                              'proveedores.nom_sp as proveedor_nombre',DB::Raw('SUM(cp_transacciones.valor) as valor'),
                                              DB::Raw('SUM(cp_transacciones.monto_itbi) as itbi_pagado'))->
                                       groupby('cp_transacciones.num_doc',
                                              'tipo_monedas.descripcion','tipo_monedas.simbolo','tipo_monedas.divisa',
                                              'proveedores.nom_sp')->
                                       where([['cp_transacciones.estado','=','ACTIVO'],['cp_transacciones.tipo_doc','!=','FT'],
                                              ['cp_transacciones.num_doc','=',$value->num_doc]])->
                                       // having('pagado', '>', 0)->
                                       first();     

            // return response()->json($pagado);
            
            $value->detalle_factura = $detalle;
            $value->pagado = isset($pagado->valor) ? $pagado->valor : 0;
        }
        return $this->successResponse($facturas, $request->urlRequest);
    }

    public function autollenado(Request $request)
    {
        $respuesta = array();

        try {
            $proveedores = proveedores::join('ciudades', 'ciudades.id_ciudad','=','proveedores.id_ciudad')->
                            join('paises', 'paises.id_pais','=','proveedores.id_pais')->
                            select('proveedores.*','ciudades.descripcion as ciudad','paises.descripcion as pais') ->
                            where('proveedores.estado','=','activo')->
                            get();

            foreach ($proveedores as $key => $value) {
                $coCuentasProveedor = coCuentasProveedor::where([['co_cuentas_proveedores.cod_sp','=',$value->cod_sp],
                                                                ['co_cuentas_proveedores.cod_sp_sec','=',$value->cod_sp_sec],
                                                                ['co_cuentas_proveedores.estado','=','activo']])->
                                                          join('cgcatalogo', 'cgcatalogo.cuenta_no','=','co_cuentas_proveedores.cuenta_no')->
                                                          select('cgcatalogo.*','co_cuentas_proveedores.porciento','co_cuentas_proveedores.cod_sp','co_cuentas_proveedores.cod_sp_sec')->
                                                          get();
                $value->cuentas_proveedor = $coCuentasProveedor; 
            }
            
            $departamento = Departamento::orderBy('id', 'asc')->where('estado','=','activo')->get();

            $condiciones  = ve_CondicionesPago::orderBy('id', 'asc')->where('estado','=','activo')->get(); 
            $monedas      = tipoMonedas::orderBy('created_at', 'desc')->where('estado','=','ACTIVO')->get();
            $tipoGastos   = cgTipoGastos::all();

            $_proveedores = array("label" => 'proveedores', "data" => $proveedores, "icono" => 'fas fa-dolly-flatbed');
            $_condiciones = array("label" => 'condiciones', "data" => $condiciones, "icono" => 'fas fa-dolly-flatbed');
            $_monedas     = array("label" => 'monedas', "data" => $monedas, "icono" => 'fas fa-dolly-flatbed');
            $_tipoGastos  = array("label" => 'tipo gastos', "data" => $tipoGastos, "icono" => 'fas fa-dolly-flatbed');
            $_departamento  = array("label" => 'departamento', "data" => $departamento, "icono" => 'fas fa-dolly-flatbed');

            array_push($respuesta,$_proveedores);
            array_push($respuesta,$_condiciones);
            array_push($respuesta,$_monedas);
            array_push($respuesta,$_tipoGastos);
            array_push($respuesta,$_departamento);

            return $this->successResponse($respuesta, $request->urlRequest);
        } catch (\Exception $e ){
            return $this->errorResponse($e->getMessage(), $request->urlRequest);
        }
    }
    
    public function store(Request $request)
    {
        $datosm =array('num_doc'         => $request->input('num_doc'),
                       'fecha_orig'      => $request->input('fecha_orig'),
                       'fecha_proc'      => $request->input('fecha_proc'),
                       'valor'           => $request->input('valor'),
                       'cond_pago'       => $request->input('cond_pago'),
                       'orden_no'        => $request->input('orden_no'),
                       'monto_itbi'      => $request->input('monto_itbi'),
                       'valor_orden'     => $request->input('valor_orden'),
                       'valor_recibido'  => $request->input('valor_recibido'),
                       'tipo_doc'        => $request->input('tipo_doc'),
                       'cuotas'          => $request->input('cuotas'),
                       'cod_sp'          => $request->input('cod_sp'),
                       'cod_sp_sec'      => $request->input('cod_sp_sec'),
                       'moneda'          => $request->input('moneda'),
                       'bienes'          => $request->input('bienes'),
                       'servicios'       => $request->input('servicios'),
                       'retencion'       => $request->input('retencion'),
                       'detalle'         => $request->input('detalle'),
                       'ncf'             => $request->input('ncf'),
                       'cod_cia'         => $request->input('cod_cia'),
                       'tipo_orden'      => $request->input('tipo_orden'),
                       'aplica_a'        => $request->input('num_doc'),
                       'cta_ctble'       => $request->input('cta_ctble'),
                       'tipo_fact'       => $request->input('tipo_fact'),
                       'codigo_fiscal'   => $request->input('codigo_fiscal'),
                       'itbis'           => $request->input('itbis'),
                       'cuenta_proveedor'=> $request->input('cuenta_proveedor'),
                       'estado'          => $request->input('estado'),
                       'usuario_creador' => $request->input('usuario_creador'),
        );
        
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
            'required_if' => 'El campo :attribute no puede estar en blanco'
        ];
        // return response()->json($request->cuentas_no);
        $validator = validator($datosm, [
            'estado'        => 'required',
            'num_doc'       => 'required',
            'fecha_orig'    => 'required',
            'fecha_proc'    => 'required',
            'valor'         => 'required',
            'cond_pago'     => 'required',
            'monto_itbi'    => 'required', 
            'itbis'         => 'required',           
            'tipo_doc'      => 'required',
            'cod_sp'        => 'required',
            'cod_sp_sec'    => 'required',
            'moneda'        => 'required',
            'ncf'           => 'required',
            'cod_cia'       => 'required',
            'aplica_a'      => 'required',
            'codigo_fiscal' => 'required',
            'estado'        => 'required',
        ],$messages);       

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            try{
                DB::beginTransaction(); 
                    if (isset($datosm['cuotas'])) {        
                        $datosm['valor'] = $datosm['valor'] / $datosm['cuotas'];
                        $datosm['monto_itbi'] = $datosm['monto_itbi'] / $datosm['cuotas'];
                        $datosm['bienes'] = $datosm['bienes'] / $datosm['cuotas'];
                        $datosm['servicios'] = $datosm['servicios'] / $datosm['cuotas'];
                        $datosm['retencion'] = $datosm['retencion'] / $datosm['cuotas'];
                        
                        for ($i=0; $i < $datosm['cuotas']; $i++) {                          
                            $fecha = date_create($datosm['fecha_orig']);
                            $mes = $i + 1;
                            date_add($fecha, date_interval_create_from_date_string($mes." months"));
                            $datosm['fecha_proc'] = date_format($fecha,"Y-m-d");
                            $datosm['aplica_a'] = $datosm['num_doc'].'-'.$mes.'/'.$datosm['cuotas'];
                            cpTransacciones::create($datosm);
                        }
                    } else {
                        cpTransacciones::create($datosm);
                    }
                    
                    $cuentas_no = $request->cuentas_no;    

                    if ($request->cuentas_no !== 0) {
                        $datosd = null;

                        foreach ($cuentas_no as $key => $value) {
                            $datosd = array('fecha'           => $request->input('fecha_orig'),
                                            'cod_sp'          => $request->input('cod_sp'),
                                            'cod_sp_sec'      => $request->input('cod_sp_sec'),
                                            'factura'         => $request->input('num_doc'),
                                            'tipo_doc'        => $request->input('tipo_doc'),
                                            'cuenta_no'       => $value['cuenta_no'],
                                            'departamento'    => isset($value['departamento']['id']) ? $value['departamento']['id'] : NULL,
                                            'num_doc'         => $request->input('num_doc'),
                                            'porciento'       => $value['porciento'],
                                            // 'cod_aux'         => $request->input('cod_aux'),
                                            // 'cod_sec'         => $request->input('cod_sec'),
                                            'detalles'        => $request->input('detalle'),
                                            'debito'          => isset($value['debito']) ? $value['debito'] : 0,
                                            'credito'         => isset($value['credito']) ? $value['credito'] : 0,
                                            //'tipo_fact'       => $request->input('tipo_fact'),
                                            'cod_cia'         => $request->input('cod_cia'),
                                            'usuario_creador' => $request->input('usuario_creador'),
                                            'estado'          =>'activo'
                            );

                            $messages = [
                                'required' => 'El campo :attribute es requerido.',
                                'unique'   => 'El campo :attribute debe ser unico',
                                'numeric'  => 'El campo :attribute debe ser numerico',
                            ];

                            $validator = validator($datosd, [
                                // 'num_oc'          => 'required',
                                'fecha'           => 'required',
                                'cod_sp'          => 'required',
                                'cod_sp_sec'      => 'required',
                                'factura'         => 'required',
                                'tipo_doc'        => 'required',
                                'cuenta_no'       => 'required',
                                'porciento'       => 'required',
                                // 'departamento'    => 'required',
                                'num_doc'         => 'required',
                                // 'debito'          => 'required',
                                // 'credito'         => 'required',
                                'cod_cia'         => 'required',
                                'estado'          => 'required',
                                'usuario_creador' => 'required',
                            ],$messages);
                        
                            if ($validator->fails()) {
                                $errors = $validator->errors();
                                return $this->errorResponseParams($errors->all(), $request->urlRequest); 
                            }                                                              
                            
                            cpTransaccionesDetalles::create($datosd);                           
                        }                     
                    }else{
                        return $this->errorResponse(null,'No hay cuentas agragadas a la transacción');
                    } 
                    // return response()->json(1);     
                DB::commit();
                return $this->successResponse($datosm, $request->urlRequest);
            } 
            catch (\Exception $e ){
                return $this->errorResponse(null, $e->getMessage());
            }
        }
    }
    
    public function show(Request $request,$id)
    {
        $factura = cpTransacciones::join('tipo_monedas','tipo_monedas.id','=','cp_transacciones.moneda')->
                                    join('proveedores',[['proveedores.cod_sp','=','cp_transacciones.cod_sp'],
                                                        ['proveedores.cod_sp_sec','=','cp_transacciones.cod_sp_sec']])->
                                    select('cp_transacciones.*',
                                            'tipo_monedas.descripcion as moneda','tipo_monedas.simbolo','tipo_monedas.divisa',
                                            'proveedores.nom_sp as proveedor_nombre')->
                                    orderBy('cp_transacciones.created_at', 'desc')->
                                    where('cp_transacciones.id','=',$id)->
                                    first();
                                        
        $detalle = cpTransaccionesDetalles::leftjoin('nodepartamentos','cp_transacciones_detalles.departamento','=','nodepartamentos.id')->
                                            join('cgcatalogo','cgcatalogo.cuenta_no','=','cp_transacciones_detalles.cuenta_no')->
                                            join('cp_transacciones','cp_transacciones.num_doc','=','cp_transacciones_detalles.num_doc')->
                                            select('cp_transacciones_detalles.*',
                                                    'nodepartamentos.titulo as departamento_descripcion',
                                                    'cgcatalogo.descripcion','cgcatalogo.depto','cgcatalogo.catalogo','cgcatalogo.referencia',
                                                    'cgcatalogo.tipo_cuenta','cgcatalogo.retencion')->
                                            where([['.cp_transacciones_detalles.estado','=','activo'],
                                                    ['cp_transacciones_detalles.num_doc','=',$factura->num_doc]])->
                                            get();
        $factura->detalle_factura = $detalle;
        
        return $this->successResponse($factura, $request->urlRequest);
    }

    public function update(Request $request, $id)
    {
        $coTransaccionesCxp = cpTransacciones::find($id);
        
        $datosm =array('num_doc'         => $request->input('num_doc'),
                       'fecha_orig'      => $request->input('fecha_orig'),
                       'fecha_proc'      => $request->input('fecha_proc'),
                       'valor'           => $request->input('valor'),
                       'cond_pago'       => $request->input('cond_pago'),
                       'orden_no'        => $request->input('orden_no'),
                       'monto_itbi'      => $request->input('monto_itbi'),
                       'valor_orden'     => $request->input('valor_orden'),
                       'valor_recibido'  => $request->input('valor_recibido'),
                       'tipo_doc'        => $request->input('tipo_doc'),
                       'cod_sp'          => $request->input('cod_sp'),
                       'cod_sp_sec'      => $request->input('cod_sp_sec'),
                       'moneda'          => $request->input('moneda'),
                       'bienes'          => $request->input('bienes'),
                       'servicios'       => $request->input('servicios'),
                       'retencion'       => $request->input('retencion'),
                       'detalle'         => $request->input('detalle'),
                       'ncf'             => $request->input('ncf'),
                       'cod_cia'         => $request->input('cod_cia'),
                       'tipo_orden'      => $request->input('tipo'),
                       'aplica_a'        => $request->input('num_doc'),
                       'cta_ctble'       => $request->input('cta_ctble'),
                       'tipo_fact'       => $request->input('tipo_fact'),
                       'codigo_fiscal'   => $request->input('codigo_fiscal'),
                       'estado'          => $request->input('estado'),
                       'usuario_creador' => $request->input('usuario_creador'),
        );
                
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
            'required_if' => 'El campo :attribute no puede estar en blanco'
        ];
        
        $validator = validator($datosm, [
            'estado'        => 'required',
            'num_doc'       => 'required',
            'fecha_orig'    => 'required',
            'fecha_proc'    => 'required',
            'valor'         => 'required',
            'cond_pago'     => 'required',
            'monto_itbi'    => 'required',
            'tipo_doc'      => 'required',
            'cod_sp'        => 'required',
            'cod_sp_sec'    => 'required',
            'moneda'        => 'required',
            'ncf'           => 'required',
            'cod_cia'       => 'required',
            'aplica_a'      => 'required',
            'codigo_fiscal' => 'required',
            'estado'        => 'required',
        ],$messages);       

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            try{
                DB::beginTransaction(); 
                    $num_doc = $coTransaccionesCxp->num_doc;
                    $cod_sp = $coTransaccionesCxp->cod_sp;
                    $cod_sp_sec = $coTransaccionesCxp->cod_sp_sec;

                    $coTransaccionesCxp->update($datosm); 

                    $cuentas_no = $request->cuentas_no;    

                    if ($request->cuentas_no !== 0) {
                        $datosd = null;
                        
                        for ($i=0; $i < count($cuentas_no); $i++) {

                            $coTransaccionesCxpDetalle = cpTransaccionesDetalles::where([['cp_transacciones_detalles.num_doc','=',$num_doc],
                                                                                           ['cuenta_no','=',$cuentas_no[$i]['cuenta_no']],
                                                                                           ['cp_transacciones_detalles.cod_sp','=',$cod_sp],
                                                                                           ['cp_transacciones_detalles.cod_sp_sec','=',$cod_sp_sec]])->
                                                                                    first();
                            
                            $datosd = array('fecha'           => $request->input('fecha_orig'),
                                            'cod_sp'          => $request->input('cod_sp'),
                                            'cod_sp_sec'      => $request->input('cod_sp_sec'),
                                            'factura'         => $request->input('num_doc'),
                                            'tipo_doc'        => $request->input('tipo_doc'),
                                            'cuenta_no'       => $cuentas_no[$i]['cuenta_no'],
                                            'departamento'    => isset($cuentas_no[$i]['departamento']['id']) ? $cuentas_no[$i]['departamento']['id'] : NULL,
                                            'num_doc'         => $request->input('num_doc'),
                                            'porciento'       => $cuentas_no[$i]['porciento'],
                                            // 'cod_aux'         => $request->input('cod_aux'),
                                            // 'cod_sec'         => $request->input('cod_sec'),
                                            'detalles'        => $request->input('detalle'),
                                            'debito'          => isset($cuentas_no[$i]['debito']) ? $cuentas_no[$i]['debito'] : 0,
                                            'credito'         => $cuentas_no[$i]['credito'],
                                            //'tipo_fact'       => $request->input('tipo_fact'),
                                            'cod_cia'         => $request->input('cod_cia'),
                                            'usuario_creador' => $request->input('usuario_creador'),
                                            'estado'          =>'activo',
                            );
                            
                            $messages = [
                                'required' => 'El campo :attribute es requerido.',
                                'unique'   => 'El campo :attribute debe ser unico',
                                'numeric'  => 'El campo :attribute debe ser numerico',
                            ];
            
                            $validator = validator($datosd, [
                                'num_oc'          => 'required',
                                'fecha'           => 'required',
                                'cod_sp'          => 'required',
                                'cod_sp_sec'      => 'required',
                                'factura'         => 'required',
                                'tipo_doc'        => 'required',
                                'cuenta_no'       => 'required',
                                'departamento'    => 'required',
                                'num_doc'         => 'required',
                                'porciento'       => 'required',
                                'debito'          => 'required',
                                'credito'         => 'required',
                                'cod_cia'         => 'required',
                                'estado'          => 'required',
                                'usuario_creador' => 'required',
                            ],$messages);
                        
                            if ($validator->fails()) {
                                $errors = $validator->errors();
                                return $this->errorResponseParams($errors->all(), $request->urlRequest); 
                            }        
                            $coTransaccionesCxpDetalle->update($datosd);                                                  
                        }                        
                    }else{
                        return $this->errorResponse(null,'No hay cuentas agragadas a la transacción');
                    }               
                DB::commit();
                return $this->successResponse($datosm, $request->urlRequest);
            } 
            catch (\Exception $e ){
                return $this->errorResponse(null, $e->getMessage());
            }
        }
    }
    
    public function destroy(Request $request, $id)
    {
        try{
            DB::beginTransaction(); 

                // VALIDACION DE PERIODO FISCAL //
                $transaccionMaster = cpTransacciones::find($id);
                $usuario = $request->get('usuario_creador');

                $fechaComoEntero = strtotime($transaccionMaster->fecha_orig);
                $anio = date("Y", $fechaComoEntero);
                $mes = date("m", $fechaComoEntero);

                $periodo = cgPeriodosFiscales::where([['anio','=',$anio],['mes','=',$mes]])->first();

                $fecha_inicio = strtotime($periodo->fecha_inicio);
                $fecha_fin = strtotime($periodo->fecha_corte);
                
                if( !(($fechaComoEntero >= $fecha_inicio) && ($fechaComoEntero <= $fecha_fin)) ) {           
                    return $this->errorResponse(null, 'Esta transacción esta fuera del periodo fiscal.');        
                }
                // ************************************************************************************* //


                // VALIDACION DE PAGOS REALIZADOS //
                $cpPagosHechos = cpTransacciones::where([['tipo_doc','!=','FT'],
                                                         ['aplica_a','=',$transaccionMaster->num_doc],
                                                         ['cod_sp','=',$transaccionMaster->cod_sp],
                                                         ['cod_sp_sec','=',$transaccionMaster->cod_sp_sec],
                                                         ['estado','=','activo']])->
                                                   get();
                if (count($cpPagosHechos)) {
                    return $this->errorResponse(null, 'Esta transacción presenta pagos realizados.');
                }
                // ************************************************************************************* //
                
                $transaccionMaster->delete(); // BORRAMOS LA FACTURA

                // BUSCAMOS LOS DETALLES
                $cpPagosHechosDetalles = cpTransaccionesDetalles::where([['tipo_doc','=','FT'],
                                                                        ['factura','=',$transaccionMaster->num_doc],
                                                                        ['cod_sp','=',$transaccionMaster->cod_sp],
                                                                        ['cod_sp_sec','=',$transaccionMaster->cod_sp_sec],
                                                                        ['estado','=','activo']])->
                                                                get();
                
                $datosm =array('num_doc'         => $transaccionMaster->num_doc,
                               'fecha_orig'      => $transaccionMaster->fecha_orig,
                               'fecha_proc'      => $transaccionMaster->fecha_proc,
                               'valor'           => $transaccionMaster->valor,
                               'cond_pago'       => $transaccionMaster->cond_pago,
                               'orden_no'        => $transaccionMaster->orden_no,
                               'monto_itbi'      => $transaccionMaster->monto_itbi,
                               'valor_orden'     => $transaccionMaster->valor_orden,
                               'valor_recibido'  => $transaccionMaster->valor_recibido,
                               'tipo_doc'        => $transaccionMaster->tipo_doc,
                               'cuotas'          => $transaccionMaster->cuotas,
                               'cod_sp'          => $transaccionMaster->cod_sp,
                               'cod_sp_sec'      => $transaccionMaster->cod_sp_sec,
                               'moneda'          => $transaccionMaster->moneda,
                               'bienes'          => $transaccionMaster->bienes,
                               'servicios'       => $transaccionMaster->servicios,
                               'retencion'       => $transaccionMaster->retencion,
                               'detalle'         => $transaccionMaster->detalle,
                               'ncf'             => $transaccionMaster->ncf,
                               'cod_cia'         => $transaccionMaster->cod_cia,
                               'tipo_orden'      => $transaccionMaster->tipo_orden,
                               'aplica_a'        => $transaccionMaster->num_doc,
                               'cta_ctble'       => $transaccionMaster->cta_ctble,
                               'tipo_fact'       => $transaccionMaster->tipo_fact,
                               'codigo_fiscal'   => $transaccionMaster->codigo_fiscal,
                               'itbis'           => $transaccionMaster->itbis,
                               'cuenta_proveedor'=> $transaccionMaster->cuenta_proveedor,
                               'estado'          => 'activo',
                               'usuario_creador' => 'test'
                );

                // GUARDAMOS EN LA TABLA HISTORICA DE TRANSACCIONES DE PAGOS
                cpTransaccionesHistoriales::create($datosm);                
                
                // GUARDAMOS EN LA TABLA HISTORICA DE TRANSACCIONES DE DETALLES DE PAGOS
                foreach ($cpPagosHechosDetalles as $key => $value) {
                    $datosd = array('fecha'           => $transaccionMaster->fecha_orig,
                                    'cod_sp'          => $transaccionMaster->cod_sp,
                                    'cod_sp_sec'      => $transaccionMaster->cod_sp_sec,
                                    'factura'         => $transaccionMaster->num_doc,
                                    'tipo_doc'        => $transaccionMaster->tipo_doc,
                                    'cuenta_no'       => $value['cuenta_no'],
                                    'departamento'    => isset($value['departamento']['id']) ? $value['departamento']['id'] : NULL,
                                    'num_doc'         => $transaccionMaster->num_doc,
                                    'porciento'       => $value['porciento'],
                                    'detalles'        => $transaccionMaster->detalle,
                                    'debito'          => isset($value['debito']) ? $value['debito'] : 0,
                                    'credito'         => isset($value['credito']) ? $value['credito'] : 0,
                                    'cod_cia'         => $transaccionMaster->cod_cia,
                                    'usuario_creador' => $transaccionMaster->usuario_creador,
                                    'estado'          =>'activo'
                    );
                    cpTransaccionesHistorialesDetalle::create($datosd);
                }

                // ELIMINAMOS LOS REGISTROS DE LA TABLA DETALLE DE TRANSACCIONES DE PAGOS
                DB::table('cp_transacciones_detalles')->where('factura','=',$transaccionMaster->num_doc)->delete();
            DB::commit();
            return $this->successResponse(1, $request->urlRequest);
        } catch (\Exception $e ){
            return $this->errorResponse(null, $e->getMessage());
        }
    }

    public function busqueda(Request $request){

        $parametro = $request->get('factura');
        // return response()->json($parametro);
        $datos = cpTransacciones::where([['cp_transacciones.num_doc','=',$parametro],
                                         ['cp_transacciones.tipo_doc','!=','FT'],
                                         ['estado','=','ACTIVO']])->
                                  get();      

        if($datos == null){
            return $this->errorResponse('No existe transacciones con esta condicion');
        }
        return $this->successResponse($datos, $request->urlRequest);
    }

    public function verificaNCF(Request $request){
        $ncf = $request->get('ncf');
        $codspsec = $request->get('proveedor');
        $myArray = explode('-',$codspsec);
       
        $cod = $myArray[0];
        $codsec = $myArray[1];

        $datos = cpTransacciones::where([['cp_transacciones.cod_sp','=',$cod],
                                         ['cp_transacciones.cod_sp_sec',$codsec],
                                         ['cp_transacciones.ncf',$ncf],
                                         ['estado','=','ACTIVO']])->
                                  first();      

        return $this->successResponse($datos, $request->urlRequest);
    }
}
