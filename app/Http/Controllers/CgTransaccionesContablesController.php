<?php

namespace App\Http\Controllers;

use App\Librerias\cgTransaccionesContables;
use App\Librerias\cgTipoDocumento;
use App\Librerias\proveedores;
use App\Librerias\tipoMonedas;
use App\Librerias\coTipoOrden;
use App\Librerias\Departamento;
use App\Librerias\cgEntradasDiarioMaster;
use App\Librerias\cpTransacciones;
use App\Librerias\secuencias;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CgTransaccionesContablesController extends ApiResponseController
{    
    public function index()
    {
        $cuentas = cgTransaccionesContables::all();
        return $this->successResponse($cuentas);
    }    
    
    public function autoLlenado()
    {        
        $respuesta = array();

        $tipoDocumentos = cgTipoDocumento::all();

        $proveedores= proveedores::join('ciudades', 'ciudades.id_ciudad','=','proveedores.id_ciudad')->
                                join('paises', 'paises.id_pais','=','proveedores.id_pais')->
                                select('proveedores.*','ciudades.descripcion as ciudad','paises.descripcion as pais') ->
                                where('proveedores.estado','=','activo')->
                                get();

        $coTipoOrdenes = coTipoOrden::all();

        $monedas = tipoMonedas::orderBy('created_at', 'desc')->where('estado','=','ACTIVO')->get();

        $departamento = Departamento::orderBy('id', 'asc')->where('estado','=','activo')->get();

        $_tipoDocumentos = array("label" => 'tipo documentos', "data" => $tipoDocumentos, "icono" => 'fas fa-dolly-flatbed');
        $_proveedores = array("label" => 'proveedores', "data" => $proveedores, "icono" => 'fas fa-dolly-flatbed');
        $_monedas = array("label" => 'monedas', "data" => $monedas, "icono" => 'fas fa-dolly-flatbed');
        $_coTipoOrdenes = array("label" => 'tipo ordenes', "data" => $coTipoOrdenes, "icono" => 'fas fa-dolly-flatbed');
        $_departamento  = array("label" => 'departamento', "data" => $departamento, "icono" => 'fas fa-dolly-flatbed');
        
        array_push($respuesta,$_departamento);
        array_push($respuesta,$_tipoDocumentos);
        array_push($respuesta,$_proveedores);
        array_push($respuesta,$_monedas);
        array_push($respuesta,$_coTipoOrdenes);

        return $this->successResponse($respuesta);
    }

    public function store(Request $request)
    {
        $datosm = $request->all();

        DB::beginTransaction(); 
            $transaccion = secuencias::where( [ ['cuenta_no','=',$datosm['cuenta_no']],['tipo_doc','=',$datosm['tipo_doc']] ])->get();
            
            if(count($transaccion) == 0){                                      
                $data = ['documento'       => 1,
                         'cuenta_no'       => $datosm['cuenta_no'],
                         'estado'          => $datosm['estado'],	
                         'usuario_creador' => $datosm['usuario_creador'],
                         'tipo_doc'	       => $datosm['tipo_doc'],
                ];
                secuencias::create($data);
                $transaccion = 1;    
            } else {
                $documento = $transaccion[0]['documento']+ 1;
                secuencias::where([ ['cuenta_no','=',$transaccion[0]['cuenta_no']],
                                    ['tipo_doc','=',$transaccion[0]['tipo_doc']] ])->
                            update(['documento'=>$documento]);      
                $transaccion = $documento;                               
            }
        DB::commit(); 
        
        $datosm['documento'] = $transaccion;        
        $datosm['ref'] = $datosm['tipo_doc'].'.'.str_pad($transaccion, 6, "0", STR_PAD_LEFT);
        
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];        

        $validator = validator($datosm, [
            'tipo_doc'        => 'required',
            'documento'       => 'required',
            'proveedor'       => 'required',
            'nombre_sup'      => 'required',
            'fecha'           => 'required',
            'moneda'          => 'required',
            'valor'           => 'required',
            'ref'             => 'required',
            'estado'          => 'required',
            'usuario_creador' => 'required',
            'estado'          => 'required',
        ],$messages);       

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{
            try{
                DB::beginTransaction(); 
                    
                cgEntradasDiarioMaster::create($datosm);  

                    $detalle_cxp = $request->detalle_cxp;
                    $detalle_cuentas = $request->detalle_cuentas;    
                    
                    if (count($detalle_cxp) !== 0) {
                        $datosc = null;
                        
                        for ($i=0; $i < count($detalle_cxp); $i++) {
                            $datosc = array('tipo_orden'      => $detalle_cxp[$i]['tipo_orden']['id'],
                                            'orden_no'        => $detalle_cxp[$i]['orden_no'],
                                            'num_doc'         => $datosm['documento'],
                                            'total'           => $detalle_cxp[$i]['total'],
                                            'valor_pendiente' => $detalle_cxp[$i]['valor_pendiente'],
                                            'fecha_orig'      => $detalle_cxp[$i]['fecha_orig'],
                                            'fecha_proc'      => $detalle_cxp[$i]['fecha_orig'],
                                            'monto_itbi'      => $detalle_cxp[$i]['monto_itbi'],
                                            'tipo_doc'        => $detalle_cxp[$i]['tipo_doc'],
                                            'cod_sp'          => $detalle_cxp[$i]['cod_sp'],
                                            'cod_sp_sec'      => $detalle_cxp[$i]['cod_sp_sec'],
                                            'moneda'          => $detalle_cxp[$i]['moneda'],
                                            'cod_cia'         => $detalle_cxp[$i]['cod_cia'],
                                            'aplica_a'        => $detalle_cxp[$i]['aplica_a'],
                                            'valor'           => $detalle_cxp[$i]['valor'],
                                            'detalle'         => $detalle_cxp[$i]['detalle'],
                                            'ncf'             => $detalle_cxp[$i]['ncf'],
                                            'usuario_creador' => $detalle_cxp[$i]['usuario_creador'],
                                            'estado'          => $detalle_cxp[$i]['estado'],
                            );

                            $messages = [
                                'required' => 'El campo :attribute es requerido.',
                                'unique'   => 'El campo :attribute debe ser unico',
                                'numeric'  => 'El campo :attribute debe ser numerico',
                            ];

                            $validator = validator($datosc, [
                                'tipo_orden'      => 'required',
                                'num_doc'         => 'required',
                                'valor_pendiente' => 'required',
                                // 'fecha'           => 'required',
                                'monto_itbi'      => 'required',
                                'tipo_doc'        => 'required',
                                'moneda'          => 'required',
                                'cod_cia'         => 'required',
                                'aplica_a'        => 'required',
                            ],$messages);
                        
                            if ($validator->fails()) {
                                $errors = $validator->errors();
                                return $this->errorResponseParams($errors->all()); 
                            }                          
                            // return response()->json($datosc);
                            cpTransacciones::create($datosc);
                        }                        
                    }
                    
                    if (count($detalle_cuentas) !== 0) {
                        $datosd = null;
                        
                        for ($i=0; $i < count($detalle_cuentas); $i++) {                                                             
                            // return response()->json($datosm);
                            $datosd = array('cuenta_no'       => $detalle_cuentas[$i]['cuenta_no'],
                                            'departamento'    => isset($detalle_cuentas[$i]['departamento']['id']) ? 
                                                                    $detalle_cuentas[$i]['departamento']['id'] : 
                                                                    $detalle_cuentas[$i]['departamento'],
                                            'ref'             => $datosm['ref'],
                                            'cuenta_banco'    => $datosm['cuenta_no'],
                                            'debito'          => $detalle_cuentas[$i]['debito'],
                                            'credito'         => $detalle_cuentas[$i]['credito'],
                                            'fecha'           => $detalle_cuentas[$i]['fecha'],
                                            'tipo_doc'        => $detalle_cuentas[$i]['tipo_doc'],
                                            'num_doc'         => $detalle_cuentas[$i]['num_doc'],
                                            'cod_aux'         => $detalle_cuentas[$i]['cod_aux'],
                                            'cod_sec'         => $detalle_cuentas[$i]['cod_sec'],
                                            'detalle_1'       => $detalle_cuentas[$i]['detalle_1'],
                                            'detalle_2'       => $detalle_cuentas[$i]['detalle_2'],
                                            'usuario_creador' => $detalle_cuentas[$i]['usuario_creador'],
                                            'estado'          => $detalle_cuentas[$i]['estado'],
                            );
                            
                            $messages = [
                                'required' => 'El campo :attribute es requerido.',
                                'unique'   => 'El campo :attribute debe ser unico',
                                'numeric'  => 'El campo :attribute debe ser numerico',
                            ];

                            $validator = validator($datosd, [
                                'ref'             => 'required',
                                'estado'          => 'required',
                                'usuario_creador' => 'required',
                            ],$messages);
                        
                            if ($validator->fails()) {
                                $errors = $validator->errors();
                                return $this->errorResponseParams($errors->all()); 
                            }                          
                            cgTransaccionesContables::create($datosd);
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
        $transaccion = cgEntradasDiarioMaster::find($id);
        return $this->successResponse($transaccion);
    }
    
    public function update(Request $request, $id)
    {
        $datosm = cgEntradasDiarioMaster::find($id);
        return response()->json($id);

        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datosm, [
            'tipo_doc'        => 'required',
            'documento'       => 'required',
            'proveedor'       => 'required',
            'nombre_sup'      => 'required',
            'fecha'           => 'required',
            'moneda'          => 'required',
            'valor'           => 'required',
            'ref'             => 'required',
            'estado'          => 'required',
            'usuario_creador' => 'required',
            'estado'          => 'required',
        ],$messages);       

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{
            try{
                DB::beginTransaction(); 
                    
                    cgEntradasDiarioMaster::create($datosm);  

                    $detalle_cxp = $request->detalle_cxp;
                    $detalle_cuentas = $request->detalle_cuentas;    

                    if (count($detalle_cxp) !== 0) {
                        $datosc = null;
                        
                        for ($i=0; $i < count($detalle_cxp); $i++) {
                            $datosc = array('tipo_orden'      => $detalle_cxp[$i]['tipo_orden']['id'],
                                            'orden_no'        => $detalle_cxp[$i]['orden_no'],
                                            'num_doc'         => $detalle_cxp[$i]['num_doc'],
                                            'total'           => $detalle_cxp[$i]['total'],
                                            'valor_pendiente' => $detalle_cxp[$i]['valor_pendiente'],
                                            'fecha_orig'      => $detalle_cxp[$i]['fecha_orig'],
                                            'fecha_proc'      => $detalle_cxp[$i]['fecha_orig'],
                                            'monto_itbi'      => $detalle_cxp[$i]['monto_itbi'],
                                            'tipo_doc'        => $detalle_cxp[$i]['tipo_doc'],
                                            'cod_sp'          => $detalle_cxp[$i]['cod_sp'],
                                            'cod_sp_sec'      => $detalle_cxp[$i]['cod_sp_sec'],
                                            'moneda'          => $detalle_cxp[$i]['moneda'],
                                            'cod_cia'         => $detalle_cxp[$i]['cod_cia'],
                                            'aplica_a'        => $detalle_cxp[$i]['aplica_a'],
                                            'valor'           => $detalle_cxp[$i]['valor'],
                                            'detalle'         => $detalle_cxp[$i]['valor'],
                                            'ncf'             => $detalle_cxp[$i]['valor'],
                                            'usuario_creador' => $detalle_cxp[$i]['usuario_creador'],
                                            'estado'          => $detalle_cxp[$i]['estado'],
                            );

                            $messages = [
                                'required' => 'El campo :attribute es requerido.',
                                'unique'   => 'El campo :attribute debe ser unico',
                                'numeric'  => 'El campo :attribute debe ser numerico',
                            ];

                            $validator = validator($datosc, [
                                'ref'             => 'required',
                                'tipo_orden'      => 'required',
                                'num_doc'         => 'required',
                                'valor_pendiente' => 'required',
                                'fecha'           => 'required',
                                'monto_itbi'      => 'required',
                                'tipo_doc'        => 'required',
                                'moneda'          => 'required',
                                'cod_cia'         => 'required',
                                'aplica_a'        => 'required',
                            ],$messages);
                        
                            if ($validator->fails()) {
                                $errors = $validator->errors();
                                return $this->errorResponseParams($errors->all()); 
                            }                          
                            cpTransacciones::create($datosc);
                        }                        
                    }
                                
                    if (count($detalle_cuentas) !== 0) {
                        $datosd = null;
                        
                        for ($i=0; $i < count($detalle_cuentas); $i++) {                                                             
                            
                            $datosd = array('cuenta_no'       => $detalle_cuentas[$i]['cuenta_no'],
                                            'departamento'    => isset($detalle_cuentas[$i]['departamento']['id']) ? 
                                                                    $detalle_cuentas[$i]['departamento']['id'] : 
                                                                    $detalle_cuentas[$i]['departamento'],
                                            'ref'             => $detalle_cuentas[$i]['ref'],
                                            'cuenta_banco'    => $detalle_cuentas[$i]['cuenta_banco'],
                                            'debito'          => $detalle_cuentas[$i]['debito'],
                                            'credito'         => $detalle_cuentas[$i]['credito'],
                                            'fecha'           => $detalle_cuentas[$i]['fecha'],
                                            'tipo_doc'        => $detalle_cuentas[$i]['tipo_doc'],
                                            'num_doc'         => $detalle_cuentas[$i]['num_doc'],
                                            'cod_aux'         => $detalle_cuentas[$i]['cod_aux'],
                                            'cod_sec'         => $detalle_cuentas[$i]['cod_sec'],
                                            'detalle_1'       => $detalle_cuentas[$i]['detalle_1'],
                                            'detalle_2'       => $detalle_cuentas[$i]['detalle_2'],
                                            'usuario_creador' => $detalle_cuentas[$i]['usuario_creador'],
                                            'estado'          => $detalle_cuentas[$i]['estado'],
                            );
                            
                            $messages = [
                                'required' => 'El campo :attribute es requerido.',
                                'unique'   => 'El campo :attribute debe ser unico',
                                'numeric'  => 'El campo :attribute debe ser numerico',
                            ];

                            $validator = validator($datosd, [
                                'ref'             => 'required',
                                'estado'          => 'required',
                                'usuario_creador' => 'required',
                            ],$messages);
                        
                            if ($validator->fails()) {
                                $errors = $validator->errors();
                                return $this->errorResponseParams($errors->all()); 
                            }                          
                            cgTransaccionesContables::create($datosd);
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
        //
    }

    public function secuencias(Request $request)
    {
        $tipo = $request->get('tipo');
        $cuenta_no = $request->get('cuenta_no');
        // return response()->json($tipo, $cuenta_no);
        $secuencia = secuencias::orderBy('created_at', 'desc')->
                                where([['tipo_doc','=',$tipo],['cuenta_no','=',$cuenta_no],['estado','=','activo']])->
                                first();

        return $this->successResponse($secuencia);
    }
}
