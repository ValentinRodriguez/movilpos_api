<?php

namespace App\Http\Controllers;

use App\Librerias\cpTransacciones;
use App\Librerias\cpTransaccionesDetalles;
use Illuminate\Http\Request;
use App\Librerias\proveedores;
use App\Librerias\coCuentasProveedor;
use App\Librerias\ve_CondicionesPago;
use App\Librerias\tipoMonedas;
use App\Librerias\cgTipoGastos;
use App\Librerias\Departamento;
use App\Librerias\Empresa;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class CpTransaccionesController extends Controller
{
    public function index()
    {
        $facturas = cpTransacciones::join('tipo_monedas','tipo_monedas.id','=','co_transacciones.moneda')->
                                    join('proveedores',[['proveedores.cod_sp','=','co_transacciones.cod_sp'],['proveedores.cod_sp_sec','=','co_transacciones.cod_sp_sec']])->
                                    select('co_transacciones.*','tipo_monedas.descripcion as moneda','tipo_monedas.simbolo','tipo_monedas.divisa','proveedores.nom_sp as proveedor_nombre')->
                                    orderBy('co_transacciones.created_at', 'desc')->
                                    where('co_transacciones.estado','=','ACTIVO')->
                                    get();

        foreach ($facturas as $key => $value) {
            $detalle = cpTransaccionesDetalles::join('nodepartamentos','nodepartamentos.id','=','co_transacciones_detalles.departamento')->
                                        select('co_transacciones_detalles.*','nodepartamentos.titulo as departamento_descripcion')->
                                        where([['.co_transacciones_detalles.estado','=','activo'],
                                                ['co_transacciones_detalles.num_doc','=',$value->num_doc]])->
                                        get();
            $value->detalle_factura = $detalle;
        }
        return $this->successResponse($facturas);
    }

    public function autollenado()
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

            return $this->successResponse($respuesta);
        } catch (\Exception $e ){
            return $this->errorResponse($e);
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
            return $this->errorResponseParams($errors->all());
        }else{
            try{
                DB::beginTransaction(); 
                    
                    cpTransacciones::create($datosm);
                    // return response()->json($datosm);
                    $cuentas_no = $request->cuentas_no;    

                    if ($request->cuentas_no !== 0) {
                        $datosd = null;
                        
                        for ($i=0; $i < count($cuentas_no); $i++) {
                            $datosd = array('fecha'           => $request->input('fecha_orig'),
                                            'cod_sp'          => $request->input('cod_sp'),
                                            'cod_sp_sec'      => $request->input('cod_sp_sec'),
                                            'factura'         => $request->input('num_doc'),
                                            'tipo_doc'        => $request->input('tipo_doc'),
                                            'cuenta_no'       => $cuentas_no[$i]['cuenta_no'],
                                            'departamento'    => $cuentas_no[$i]['departamento']['id'],
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
                            // return response()->json($datosd);
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
                                'porciento'       => 'required',
                                'departamento'    => 'required',
                                'num_doc'         => 'required',
                                'debito'          => 'required',
                                'credito'         => 'required',
                                'cod_cia'         => 'required',
                                'estado'          => 'required',
                                'usuario_creador' => 'required',
                            ],$messages);
                        
                            if ($validator->fails()) {
                                $errors = $validator->errors();
                            }                          
                            //return response()->json($datosd);              
                            cpTransaccionesDetalles::create($datosd);                                                   
                        }                        
                    }else{
                        return $this->errorResponse(null,'No hay cuentas agragadas a la transacción');
                    }               
                DB::commit();
                return $this->successResponse($datosm);
            } 
            catch (\Exception $e ){
                return $this->errorResponse(null, $e->getMessage());
            }
        }
    }
    
    public function show($id)
    {
        $factura = cpTransacciones::join('tipo_monedas','tipo_monedas.id','=','co_transacciones.moneda')->
                                        join('proveedores',[['proveedores.cod_sp','=','co_transacciones.cod_sp'],
                                                            ['proveedores.cod_sp_sec','=','co_transacciones.cod_sp_sec']])->
                                        select('co_transacciones.*',
                                               'tipo_monedas.descripcion as moneda','tipo_monedas.simbolo','tipo_monedas.divisa',
                                               'proveedores.nom_sp as proveedor_nombre')->
                                        orderBy('co_transacciones.created_at', 'desc')->
                                        where('co_transacciones.id','=',$id)->
                                        first();
                                        
        $detalle = cpTransaccionesDetalles::join('nodepartamentos','nodepartamentos.id','=','co_transacciones_detalles.departamento')->
                                        join('cgcatalogo','cgcatalogo.cuenta_no','=','co_transacciones_detalles.cuenta_no')->
                                        join('co_transacciones','co_transacciones.num_doc','=','co_transacciones_detalles.num_doc')->
                                        select('co_transacciones_detalles.*',
                                                'nodepartamentos.titulo as departamento_descripcion',
                                                'cgcatalogo.descripcion','cgcatalogo.depto','cgcatalogo.catalogo','cgcatalogo.referencia',
                                                'cgcatalogo.tipo_cuenta','cgcatalogo.retencion')->
                                        where([['.co_transacciones_detalles.estado','=','activo'],
                                                ['co_transacciones_detalles.num_doc','=',$factura->num_doc]])->
                                        get();
        $factura->detalle_factura = $detalle;
        
        return $this->successResponse($factura);
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
            return $this->errorResponseParams($errors->all());
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

                            $coTransaccionesCxpDetalle = cpTransaccionesDetalles::where([['co_transacciones_detalles.num_doc','=',$num_doc],
                                                                                           ['cuenta_no','=',$cuentas_no[$i]['cuenta_no']],
                                                                                           ['co_transacciones_detalles.cod_sp','=',$cod_sp],
                                                                                           ['co_transacciones_detalles.cod_sp_sec','=',$cod_sp_sec]])->
                                                                                    first();
                            
                            $datosd = array('fecha'           => $request->input('fecha_orig'),
                                            'cod_sp'          => $request->input('cod_sp'),
                                            'cod_sp_sec'      => $request->input('cod_sp_sec'),
                                            'factura'         => $request->input('num_doc'),
                                            'tipo_doc'        => $request->input('tipo_doc'),
                                            'cuenta_no'       => $cuentas_no[$i]['cuenta_no'],
                                            'departamento'    => $cuentas_no[$i]['departamento']['id'],
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
                            }        
                            $coTransaccionesCxpDetalle->update($datosd);                                                  
                        }                        
                    }else{
                        return $this->errorResponse(null,'No hay cuentas agragadas a la transacción');
                    }               
                DB::commit();
                return $this->successResponse($datosm);
            } 
            catch (\Exception $e ){
                return $this->errorResponse(null, $e->getMessage());
            }
        }
    }
    
    public function destroy($id)
    {
        try{
            DB::beginTransaction(); 
                $facturas = cpTransacciones::join('tipo_monedas','tipo_monedas.id','=','co_transacciones.moneda')->
                                                join('proveedores',[['proveedores.cod_sp','=','co_transacciones.cod_sp'],
                                                                    ['proveedores.cod_sp_sec','=','co_transacciones.cod_sp_sec']])->
                                                select('co_transacciones.*',
                                                    'tipo_monedas.descripcion as moneda','tipo_monedas.simbolo','tipo_monedas.divisa',
                                                    'proveedores.nom_sp as proveedor_nombre')->
                                                orderBy('co_transacciones.created_at', 'desc')->
                                                where([['co_transacciones. id','=',$id],['co_transacciones.tipo_doc','!=','FT']])->
                                                get();
                if (count($facturas) != 0) {
                    return $this->errorResponse(null, 'Esta transacción no puede ser eliminada porque ya tiene pagos realizados.');
                }

                $transaccionMaster = cpTransacciones::find($id);

                if ($transaccionMaster == null){
                    return $this->errorResponse(null,"Registro no Existe");
                }
                
                $transaccionMaster->update(['estado' => 'eliminado']);

                
                $transaccionDetalle = cpTransaccionesDetalles::where([['co_transacciones_detalles.num_doc','=',$transaccionMaster->num_doc],
                                                                        ['co_transacciones_detalles.cod_sp','=',$transaccionMaster->cod_sp],
                                                                        ['co_transacciones_detalles.cod_sp_sec','=',$transaccionMaster->cod_sp_sec],
                                                                        ['co_transacciones_detalles.estado','=', 'activo']])->
                                                                get();
                
                for ($i=0; $i < count($transaccionDetalle); $i++) {                   
                    $transaccion = cpTransacciones::find($transaccionDetalle[$i]['id']);
                    $transaccion->update(['estado' => 'eliminado']);
                }
            DB::commit();
            return $this->successResponse(1);
        } catch (\Exception $e ){
            return $this->errorResponse(null, $e->getMessage());
        }
    }
}
