<?php

namespace App\Http\Controllers;

use App\Librerias\cgTransaccionesContables;
use App\Librerias\cgEntradasDiarioMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Librerias\Empresa;
use Barryvdh\DomPDF\Facade as PDF;

class CgEntradasDiarioMasterController extends ApiResponseController
{
    public function index(Request $request)
    {
        $catalogo = cgEntradasDiarioMaster::where('estado','=','activo')->
        get();

        foreach ($catalogo as $key => $value) {
           $detalle= cgTransaccionesContables::where('cg_transacciones_contables.ref','=',$value->ref)->
            get();
            $value->cuentas=$detalle;
        }

        if ($catalogo == null){
            return $this->errorResponse($catalogo);
        }
        return $this->successResponse($catalogo, $request->urlRequest);
    }
        
    public function store(Request $request)
    {     
        $maxid=0;
        $idsecuencia=0;
        $maxid= cgEntradasDiarioMaster::get('documento')->max();

        if ($maxid==null){
            $idsecuencia=1;
        }
        else{
            $idsecuencia=$maxid->secuencia_entrada;
            $idsecuencia=$idsecuencia+1;
        }

        $datosm =array(
            'fecha'             => $request->input('fecha'),
            'documento'         => $idsecuencia,
            'ref'               => $request->input('ref'),
            'periodo'           => $request->input('periodo'),
            'mes'               => $request->input('mes'),
            'detalle'           => $request->input('detalle'),
            "estado"            => 'activo',
            'usuario_creador'   => $request->input('usuario_creador') ,
            'cuentas'           => $request->input('cuentas'),
            'tipo_doc'          =>'TR'         
        );
        
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
            'required_if' => 'El campo :attribute no puede estar en blanco'
        ];
        
        $validator = validator($datosm, [
            'fecha'         => 'required',
            'documento'     => 'required',
            'estado'        => 'required',
        ],$messages);       
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            
            try{
            
                DB::beginTransaction(); 
                     cgEntradasDiarioMaster::create($datosm); 
                
                    if (count($request->cuentas) !== 0) {
                        $datosd = null;
                        $cuentas=$request->cuentas;
                 
                        for ($i=0; $i < count($request->cuentas) ; $i++) {
                           
                                $datosd = array(
                                    'fecha'             => $request->input('fecha'),
                                    'ref'               => $request->input('ref'),
                                    'cuenta_no'         => $cuentas[$i]['cuenta_no'],
                                    'departamento'      => $cuentas[$i]['departamento'],
                                    'num_doc'           => $cuentas[$i]['num_doc'],  
                                    'cod_aux'           => $cuentas[$i]['cod_aux'],
                                    'cod_sec'           => $cuentas[$i]['cod_sec'],
                                    'detalle_1'         => $request->input('detalle'),
                                    'debito'            => $cuentas[$i]['debito'],
                                    'credito'           => $cuentas[$i]['credito'],
                                    "estado"            =>'activo',
                                    "usuario_creador"   =>$request->input("usuario_creador")
                            );
                         
                            $messages = [
                                'required' => 'El campo :attribute es requerido.',
                                'unique'   => 'El campo :attribute debe ser unico',
                                'numeric'  => 'El campo :attribute debe ser numerico',
                            ];

                            $validator = validator($datosd, [
                                'ref'          => 'required',
                                'cuenta_no'           => 'required'
                                
                            ],$messages);
                        
                            if ($validator->fails()) {
                                $errors = $validator->errors();
                                return $this->errorResponseParams($errors->all(), $request->urlRequest);                                
                            }     
                           // return response()->json($datosd);                                   
                            cgTransaccionesContables::create($datosd);                                                   
                        }                        
                    }else{
                        return $this->errorResponse('No hay cuentas agragadas a la transacción');
                    }             
                DB::commit();

                return $this->successResponse($datosm, $request->urlRequest);
            }
                catch (\Exception $e ){
                    return $this->errorResponse($e->getMessage(), $request->urlRequest);
                }
        }
    }

  
    public function show(Request $request,$id)
    {
        $catalogo = cgEntradasDiarioMaster::find($id);
        
        $detalle= cgTransaccionesContables::where('cg_transacciones_contables.ref','=',$catalogo->ref)->get();            
        $catalogo->cuentas=$detalle;

        if ($catalogo == null){
            return $this->errorResponse($catalogo);
        }
        return $this->successResponse($catalogo, $request->urlRequest);
    }


    public function edit(cgEntradasDiarioMaster $cgEntradasDiarioMaster)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
      
        $entrada = cgEntradasDiarioMaster::find($id);  
        
        $datosm =array(
            'fecha'             => $request->input('fecha'),
            'detalle'           => $request->input('detalle'),
            "estado"            => 'activo',
            'usuario_modificador'   => $request->input('usuario_modificador') ,
            'cuentas'           => $request->input('cuentas')         
        );
      //  return response()->json($datosm);
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
            'required_if' => 'El campo :attribute no puede estar en blanco'
        ];
        
        $validator = validator($datosm, [
            'fecha'         => 'required',
            'estado'         => 'required',
        ],$messages);       
      
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            
            try{
            
                DB::beginTransaction(); 

                $entrada->update($request->all());    
               
                    if (count($request->cuentas) !== 0) {
                        $datosd = null;
                        $cuentas=$request->cuentas;
                 
                        for ($i=0; $i < count($request->cuentas) ; $i++) {
                           
                                $datosd = array(
                                    'cuenta_no'         => $cuentas[$i]['cuenta_no'],
                                    'departamento'      => $cuentas[$i]['departamento'],
                                    'num_doc'           => $cuentas[$i]['num_doc'],  
                                    'cod_aux'           => $cuentas[$i]['cod_aux'],
                                    'cod_sec'           => $cuentas[$i]['cod_sec'],
                                    'detalle_1'         => $request->input('detalle'),
                                    'debito'            => $cuentas[$i]['debito'],
                                    'credito'           => $cuentas[$i]['credito'],
                                    "estado"            =>'activo',
                                    "usuario_modificador"   =>$request->input("usuario_modificador")
                            );
                            
                            $messages = [
                                'required' => 'El campo :attribute es requerido.',
                                'unique'   => 'El campo :attribute debe ser unico',
                                'numeric'  => 'El campo :attribute debe ser numerico',
                            ];

                            $validator = validator($datosd, [
                                'cuenta_no'           => 'required'
                                
                            ],$messages);
                        
                            if ($validator->fails()) {
                                $errors = $validator->errors();
                                return $this->errorResponseParams($errors->all(), $request->urlRequest); 
                            }
                            cgTransaccionesContables::where('cg_transacciones_contables.ref','=',$entrada['ref'])->update($datosd);                                                                     
                        }                        
                    }else{
                        return $this->errorResponse('No hay cuentas agragadas a la transacción');
                    }             
                DB::commit();

                return $this->successResponse(1, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }
    
    public function destroy(cgEntradasDiarioMaster $cgEntradasDiarioMaster)
    {
        //
    }

    public function secuencia(Request $request){
        $maxid=0;
        $idsecuencia=0;
        $maxid= cgEntradasDiarioMaster::get('documento')->max();
       // return $this->successResponse($maxid, $request->urlRequest);
        if ($maxid==null){
            $idsecuencia=1;
        }
        else{
            $idsecuencia=$maxid->documento;
            $idsecuencia=$idsecuencia+1;
            
        }
        return $this->successResponse($idsecuencia, $request->urlRequest);
    

    }

    public function verReporte($num_oc,$periodo){
    
        $debito=0;
        $credito=0;

        $entrada = cgTransaccionesContables::where([['cg_transacciones_contables.estado','=','ACTIVO']])-> 
                        join('cg_entradas_diario_masters','cg_entradas_diario_masters.ref','=','cg_transacciones_contables.ref')->
                        where( [['cg_entradas_diario_masters.documento','=',$num_oc],
                        ['cg_entradas_diario_masters.periodo','=',$periodo]])->
                        select('cg_transacciones_contables.*')->                                
                                get();
                             //   return $this->successResponse($entrada, $request->urlRequest);
        if ($entrada == null){
            return $this->errorResponse('No existen datos');
        }
        else {
            $empresa = Empresa::orderBy('created_at', 'desc')->first();
            //return response()->json($entrada);
         foreach ($entrada as $key => $value) {
            $value->empresa=$empresa;
           
            $debito+=$value['debito'];       
            $credito+=$value['credito'];
           
         }
               
        
        $entrada[0]->tdebito=$debito;
        $entrada[0]->tcredito=$credito;
        $aqui=$empresa->moneda;
     
          
          
           return response()->json($aqui);            
            // return view('orden_compra', ['datos' => $datos]);
            $pdf = PDF::loadView('entradas_diario', compact('entrada'));
            return $pdf->stream('entradas_diario.pdf');
        }                       
    }

    public function verificaEntrada(Request $request){
        $ref = $request->get('ref');
       

        $datos = cgTransaccionesContables::where([['cg_transacciones_contables.ref','=',$ref],
                                         ['estado','=','ACTIVO']])->
                                  first();      

        return $this->successResponse($datos, $request->urlRequest);
    }
}
