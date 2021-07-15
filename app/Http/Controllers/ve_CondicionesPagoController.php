<?php

namespace App\Http\Controllers;

use App\Librerias\ve_CondicionesPago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ve_CondicionesPagoController extends ApiResponseController
{
    public function index(Request $request)
    {
        $condiciones = ve_CondicionesPago::orderBy('id', 'asc')->
                                  where('estado','=','activo')->
                                  get();
        
        return $this->successResponse($condiciones, $request->urlRequest);
    }
    
    public function store(Request $request)
    {
        $datos = array(
            "descripcion"     =>$request->input("descripcion"),
            "defecto"         =>$request->input("defecto"),
            "dias"            =>$request->input("dias"),
            "usuario_creador" =>$request->input("usuario_creador"),  
            "estado"          =>$request->input("estado")
        );
        
        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];
        $validator = validator($datos, [
            'descripcion'     => 'required|string',
            'defecto'         => 'required|string',
            'dias'            => 'required',
            'usuario_creador' => 'required|string',
            'estado'          => 'required|string'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{            
            try {
                DB::beginTransaction(); 
                    $maxid=0;
                    $idsecuencia=0;
                    $maxid = ve_CondicionesPago::get('cond_pago')->max();
        
                    if ($maxid == null){
                        $idsecuencia=1;
                    } else {
                        $idsecuencia = $maxid->cond_pago;
                        $idsecuencia=$idsecuencia + 1;
                    }
        
                    $datos = $datos + array('cond_pago' =>$idsecuencia);
                    ve_CondicionesPago::create($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }
    
    public function show(Request $request,$id)
    {
        $condicion = ve_CondicionesPago::find($id);
        if ($condicion == null){
            return $this->errorResponse($condicion);
        }
        return $this->successResponse($condicion, $request->urlRequest);
    }
    
    public function update(Request $request,  $id)
    {
        $condicion = ve_CondicionesPago::find($id);

        $datos = array(
            "descripcion"     =>$request->input("descripcion"),
            "defecto"         =>$request->input("defecto"),
            "dias"            =>$request->input("dias"),
            "usuario_creador" =>$request->input("usuario_creador"),  
            "usuario_modificador" =>$request->input("usuario_modificador"),  
            "estado"          =>$request->input("estado")
        );
        
        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];
        $validator = validator($datos, [
            'descripcion'     => 'required|string',
            'defecto'         => 'required|string',
            'dias'            => 'required',
            'usuario_creador' => 'required|string',
            'usuario_modificador' => 'required|string',
            'estado'          => 'required|string'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{            
            try {
                DB::beginTransaction(); 
                    $condicion->update($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }
    
    public function destroy(Request $request, $id)
    {
        $condicion = ve_CondicionesPago::find($id);
        $condicion->update(['estado' => 'eliminado']);
        return $this->successResponse(null, $request->urlRequest);
    }

    public function condPagos(Request $request)
    {
        $condicion = $request->get('condicion');
        
        $busqueda = ve_CondicionesPago::orderBy('cond_pago', 'asc')->
                                where([['descripcion','=',$condicion],
                                       ['estado','=','ACTIVO']
                                     ])->
                                get(); 
                                                        
        return $this->successResponse($busqueda, $request->urlRequest);
    }
    
}
