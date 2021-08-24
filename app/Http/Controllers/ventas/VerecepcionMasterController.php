<?php

namespace App\Http\Controllers\ventas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Librerias\ventas\verecepcion_master;
use App\Librerias\ventas\verecepcion_detalle;
use App\Http\Controllers\ApiResponseController;

class VerecepcionMasterController extends ApiResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $recepcion = verecepcion_master::join('verecepcion_detalles','verecepcion_detalles.num_oc','=','verecepcion_master.num_oc')
                                        ->join('veclientes',function($join){
                                            $join->on('verecepcion_master.tipo_cliente','=','veclientes.tipo_cliente')->
                                            oron('verecepcion_master.sec_cliente','=','veclientes.sec_cliente');
                                        })->select('verecepcion_master.*','verecepcion_detalles.id_inspeccion','vecliente.nombre');
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $productos =  $request->productosLength;
   

        $maxid=0;
        $idsecuencia=0;
     
        $maxid= verecepcion_master::get('num_oc')->max();

        if ($maxid==null){
            $idsecuencia=1;
        }
        else{
            $idsecuencia=$maxid->num_oc;
            $idsecuencia=$idsecuencia+1;
        }

        $datosm =array('num_oc'                => $idsecuencia,
                       'tipo_cliente'        =>$request->input('tipo_cliente'),
                       'sec_cliente'         =>$request->input('sec_cliente'),
                       'recibe'              =>$request->input('recibe'),
                       'entrega'             =>$request->input('entrega'),
                       'fecha_entrega'       =>$request->input('fecha_entrega'),
                       'estado'               =>'ACTIVO',
                       'usuario_creador'     => $request->input('usuario_creador')                      
                       );
        $messages = [
                'required' => 'El campo :attribute es requerido.',
                'unique'   => 'El campo :attribute debe ser unico',
                'numeric'  => 'El campo :attribute debe ser numerico',
                'required_if' => 'El campo :attribute no puede estar en blanco'
        ];
       
        $validator = validator($datosm, [           
            'num_oc'  =>'required',
            'tipo_cliente' =>'required',
            'sec_cliente' =>'required'
        ],$messages);       

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors->all());
        }else{
            try{
                DB::beginTransaction();                
                verecepcion_master::create($datosm);             
              
                    if ($request->productos !== 0) {
                        $datosd = null;
                      
                        for ($i=0; $i < $productos; $i++) {

                            $datosd = array('num_oc'          => $idsecuencia,
                                           'id_inspeccion'  =>$request->input('id_inspeccion'),
                                           'respuesta'      =>$request->input('respuesta')
                                            );
            
                            $messages = [
                                'required' => 'El campo :attribute es requerido.',
                                'unique'   => 'El campo :attribute debe ser unico',
                                'numeric'  => 'El campo :attribute debe ser numerico',
                            ];
            
                            $validator = validator($datosd, [
                                'num_oc'          => 'required',
                                'id_inspeccion'    => 'required']);
                         
                            if ($validator->fails()) {
                                $errors = $validator->errors();
                                return $this->errorResponseParams($errors->all(), $request->urlRequest);                           
                            }            
                           verecepcion_detalle::create($datosd);                       
                        } 
                    }else{
                        return $this->errorResponse('No hay productos agragados a la transaccion');
                    }
               
                    DB::commit();
                    return $this->successResponse('1', $request->urlRequest);
                } 
                catch (\Exception $e ){
                    return $this->errorResponse($e->getMessage(), $request->urlRequest);
                }
            }
    }
    public function show(verecepcion_master $verecepcion_master)
    {
        //
    }
    
    public function update(Request $request, verecepcion_master $verecepcion_master)
    {
        //
    }
    
    public function destroy(verecepcion_master $verecepcion_master)
    {
        //
    }
}
