<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ApiResponseController;

use App\Librerias\cgPeriodosFiscales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Librerias\cgTransaccionesContables;
use Carbon\Carbon;

class CgPeriodosFiscalesController extends ApiResponseController
{   
    public function index(Request $request)
    {
        $periodosFiscales = cgPeriodosFiscales::orderBy('anio', 'desc')->get();
                                      
        return $this->successResponse($periodosFiscales, $request->urlRequest);
    }

    public function store(Request $request)
    {
        $datos = array(
            'anio'	          =>$request->input("anio"),
            'usuario_creador' =>$request->input('usuario_creador'),
            'estado'          =>$request->input('estado'),
            'meses'	          =>$request->input("meses"),
        );
        
        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];
        $validator = validator($datos, [
            'anio'	          => 'required|',
            'usuario_creador' => 'required|',
            'estado'          => 'required|',
            'meses'	          => 'required|',
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{            
            try {                
                DB::beginTransaction();
                    $periodoFiscal = cgPeriodosFiscales::orderBy('anio', 'desc')->
                                                         where([['estado','=','activo'],['anio','=',$datos['anio']]])->
                                                         get();
                                            // return response()->json($periodoFiscal);
                    if(count($periodoFiscal) != 0){
                        return $this->errorResponse("Este periodo fiscal ya esta registrado");                    
                    }                    


                    if ($request->meses !== 0) {
                        $datosd = null;
                        
                        for ($i=0; $i < count($datos['meses']); $i++) {
                           
                            $datosd = array(
                                'anio'	          => $datos['anio'],
                                'mes'	          => $datos['meses'][$i]['mes'],
                                'fecha_inicio'    => $datos['meses'][$i]['fecha_inicio'],
                                'fecha_corte'     => $datos['meses'][$i]['fecha_corte'],
                                'dias_habiles'    => $datos['meses'][$i]['dias_habiles'],
                                'dias_gracia'     => $datos['meses'][$i]['dias_gracia'],
                                'usuario_creador' => $datos['usuario_creador'],
                                'estado'          => $datos['estado'],
                            );
                          
                            $messages = [
                                'required' => 'El campo :attribute es requerido.',
                                'unique'   => 'El campo :attribute debe ser unico',
                                'numeric'  => 'El campo :attribute debe ser numerico',
                            ];
                            
                            $validator = validator($datosd, [
                                // 'num_oc'          => 'required',
                                'anio'            => 'required',
                                'mes'             => 'required',
                                'fecha_inicio'    => 'required',
                                'fecha_corte'     => 'required',
                                'dias_habiles'    => 'required',
                                'dias_gracia'     => 'required',
                                'usuario_creador' => 'required',
                                'estado'          => 'required',
                            ],$messages);
                         
                            if ($validator->fails()) {
                                $errors = $validator->errors();
                                return $this->errorResponseParams($errors->all(), $request->urlRequest); 
                               
                            }                                        
                            cgPeriodosFiscales::create($datosd);                                               
                        }                        
                    }else{
                        return $this->errorResponse('Debe ingresar informacion');
                    } 
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
        $periodosFiscales = cgPeriodosFiscales::find($id);
        if ($periodosFiscales == null){
            return $this->errorResponse($periodosFiscales);
        }
        return $this->successResponse($periodosFiscales, $request->urlRequest);
    }

    public function update(Request $request,  $id)
    {
        $periodosFiscales = cgPeriodosFiscales::find($id);

        $datos = array(
            'anio'	              =>$request->input("anio"),
            'mes'	              =>$request->input("mes"),
            'fecha_inicio'        =>$request->input("fecha_inicio"),
            'fecha_corte'         =>$request->input("fecha_corte"),
            'dias_habiles'        =>$request->input("dias_habiles"),
            'dias_gracia'         =>$request->input("dias_gracia"),
            'estado'              =>$request->input('estado'),
            'usuario_creador'     =>$request->input('usuario_creador'),
            'usuario_modificador' =>$request->input('usuario_modificador'),
        );
        
        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];
        $validator = validator($datos, [
            'anio'	              => 'required',
            'mes'	              => 'required',
            'fecha_inicio'        => 'required',
            'fecha_corte'         => 'required',
            'dias_habiles'        => 'required',
            'dias_gracia'	      => 'required',
            'estado'              => 'required',
            'usuario_creador'     => 'required',
            'usuario_modificador' => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            try {
                DB::beginTransaction(); 
                    $periodosFiscales->update($datos);                
                DB::commit();
                return $this->successResponse(1, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    public function destroy(Request $request, $id)
    {
        $periodosFiscales = cgPeriodosFiscales::where('id','=',$id)->first();

        if($periodosFiscales == null){
            return $this->errorResponse("Este periodo no existe");
        }

        $fecha_inicio =  Carbon::parse($periodosFiscales->fecha_inicio)->toDateString();
        $fecha_corte =  Carbon::parse($periodosFiscales->fecha_corte)->toDateString();
        
        $transaccionesC = cgTransaccionesContables::whereBetween('fecha', [$fecha_inicio, $fecha_corte])->get();
        if (count($transaccionesC) != 0) {
            return $this->errorResponse("No puede eliminar este periodo, tiene transaccion/es asociada/s");
        }else{
            $periodosFiscales->update(['estado' => 'ELIMINADO']);
            return $this->successResponse(null, $request->urlRequest);
        }
    }

    public function busqueda(Request $request)
    {
        $periodo = $request->get('periodos');
        // return response()->json($periodo);
        $periodosFiscales = cgPeriodosFiscales::orderBy('anio', 'desc')->
                                      where([['estado','=','activo'],['anio','=',$periodo]])->
                                      get();
                                      
        return $this->successResponse($periodosFiscales, $request->urlRequest);
    }

    public function restaurarPeriodo(Request $request)
    {
        $datos = $request->all();
        $periodosFiscales = cgPeriodosFiscales::where('id','=',$datos["periodo"])->first();
        //return response()->json($periodosFiscales);
        if($periodosFiscales == null){
            return $this->errorResponse("Este periodo no existe");
        }

        $periodosFiscales->update(['estado' => 'activo']);
        return $this->successResponse(null, $request->urlRequest);

    }
}
