<?php

namespace App\Http\Controllers\cuentasXpagar;

use App\Http\Controllers\ApiResponseController;
use App\Librerias\cp_gestion_doc_ncnd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CpGestionDocNcndController extends ApiResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ncnd = cp_gestion_doc_ncnd::orderBy('num_doc', 'asc')->
        where('estado','=','ACTIVO')->
        get();
        
        return $this->successResponse($ncnd, $request->urlRequest);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maxid=0;
        $idsecuencia=0;
        $maxid = cp_gestion_doc_ncnd::get('num_doc')->max();

        if ($maxid == null){
            $idsecuencia=1;
        } else {
            $idsecuencia = $maxid->num_doc;
            $idsecuencia=$idsecuencia + 1;
        }
       // return response()->json($request);
        $datos =array('num_doc'         =>$idsecuencia,
            'tipo_doc'        => $request->input('tipo_doc'),
            'cta_ctble'       => $request->input('cta_ctble'),
            'cod_sp'          => $request->input('cod_sp'),
            'cod_sp_sec'      => $request->input('cod_sp_sec'),
            'fecha_orig'           => $request->input('fecha_orig'),
            'fecha_proc'           => $request->input('fecha_orig'),
            'valor'           => $request->input('valor'),
            'monto_itbi'      => $request->input('monto_itbi'),
            'detalle'         => $request->input('detalle'),
            'codigo_fiscal'   => $request->input('codigo_fiscal'),
            'ncf'             => $request->input('ncf'),
            'cta_ctble'       => $request->input('cta_ctble'),
            'estado'          => 'ACTIVO',
            'usuario_creador' => $request->input('usuario_creador'),
            'cod_cia'         => '1',
            'aplica_a'         =>$idsecuencia,
        );
        
        $datos['tipo_doc'] = $datos['tipo_doc']['value'];
    // return response()->json($datos);
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
            'required_if' => 'El campo :attribute no puede estar en blanco'
        ];

        $validator = validator($datos, [
            'tipo_doc'       => 'required',
            'num_doc'        => 'required',
            'cod_sp'         => 'required',
            'cod_sp_sec'    => 'required',
            'valor'          => 'required',
        ],$messages);       

        if ($validator->fails()) {
            $errors =  $validator->errors();
            return $this->errorResponse($errors);
        } else {
            try {
                    DB::beginTransaction();  
                     cp_gestion_doc_ncnd::create($datos);
                    DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cp_gestion_doc_ncnd  $cp_gestion_doc_ncnd
     * @return \Illuminate\Http\Response
     */
    public function show(cp_gestion_doc_ncnd $cp_gestion_doc_ncnd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cp_gestion_doc_ncnd  $cp_gestion_doc_ncnd
     * @return \Illuminate\Http\Response
     */
    public function edit(cp_gestion_doc_ncnd $cp_gestion_doc_ncnd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cp_gestion_doc_ncnd  $cp_gestion_doc_ncnd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cp_gestion_doc_ncnd $cp_gestion_doc_ncnd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cp_gestion_doc_ncnd  $cp_gestion_doc_ncnd
     * @return \Illuminate\Http\Response
     */
    public function destroy(cp_gestion_doc_ncnd $cp_gestion_doc_ncnd)
    {
        //
    }
}
