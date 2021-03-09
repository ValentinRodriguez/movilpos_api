<?php

namespace App\Http\Controllers;

use App\Librerias\cgTransaccionesContables;
use App\Librerias\cgEntradasDiarioMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CgEntradasDiarioMasterController extends ApiResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogo = cgEntradasDiarioMaster::where('estado','=','ACTIVO')->
        get();

        if ($catalogo == null){
            return $this->errorResponse($catalogo);
        }
        return $this->successResponse($catalogo);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
     
        $maxid=0;
        $idsecuencia=0;
        $maxid= cgEntradasDiarioMaster::get('secuencia_entrada')->max();

        if ($maxid==null){
            $idsecuencia=1;
        }
        else{
            $idsecuencia=$maxid->secuencia_entrada;
            $idsecuencia=$idsecuencia+1;
        }

        $datosm =array(
            'fecha'             => $request->input('fecha'),
            'secuencia_entrada' => $idsecuencia,
            'ref'               => $request->input('ref'),
            'periodo'           => $request->input('periodo'),
            'mes'               => $request->input('mes'),
            'detalle'           => $request->input('detalle'),
            "estado"            => 'activo',
            'usuario_creador'   => $request->input('usuario_creador') ,
            'cuentas'           => $request->input('cuentas')         
        );
        
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
            'required_if' => 'El campo :attribute no puede estar en blanco'
        ];
        
        $validator = validator($datosm, [
            'fecha'         => 'required',
            'secuencia_entrada'         => 'required',
            'estado'         => 'required',
        ],$messages);       
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
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
                           // return response()->json($datosd);
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
                                
                            }                                        
                            cgTransaccionesContables::create($datosd);                                                   
                        }                        
                    }else{
                        return $this->errorResponse('No hay cuentas agragadas a la transacción');
                    }             
                DB::commit();

                return $this->successResponse(1);
            }
                catch (\Exception $e ){
                    return $this->errorResponse($e);
                }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cgEntradasDiarioMaster  $cgEntradasDiarioMaster
     * @return \Illuminate\Http\Response
     */
    public function show(cgEntradasDiarioMaster $cgEntradasDiarioMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cgEntradasDiarioMaster  $cgEntradasDiarioMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(cgEntradasDiarioMaster $cgEntradasDiarioMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cgEntradasDiarioMaster  $cgEntradasDiarioMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cgEntradasDiarioMaster $cgEntradasDiarioMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cgEntradasDiarioMaster  $cgEntradasDiarioMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(cgEntradasDiarioMaster $cgEntradasDiarioMaster)
    {
        //
    }

    public function secuencia(){
        $maxid=0;
        $idsecuencia=0;
        $maxid= cgEntradasDiarioMaster::get('secuencia_entrada')->max();
       // return $this->successResponse($maxid);
        if ($maxid==null){
            $idsecuencia=1;
        }
        else{
            $idsecuencia=$maxid->secuencia_entrada;
            $idsecuencia=$idsecuencia+1;
            
        }
        return $this->successResponse($idsecuencia);
    

    }
}
