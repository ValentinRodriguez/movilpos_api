<?php

namespace App\Http\Controllers;

use App\cpnotas_debito_credito;
use Illuminate\Http\Request;

class CpnotasDebitoCreditoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $datosm =array('num_doc'         => $request->input('num_doc'),
            'fecha_orig'      => $request->input('fecha_orig'),
            'fecha_proc'      => $request->input('fecha_proc'),
            'valor'           => $request->input('valor'),
            'valor_recibido'  => $request->input('valor_recibido'),
            'tipo_doc'        => $request->input('tipo_doc'),
            'cod_sp'          => $request->input('cod_sp'),
            'cod_sp_sec'      => $request->input('cod_sp_sec'),
            'detalle'         => $request->input('detalle'),
            'cod_cia'         => $request->input('cod_cia'),
            'aplica_a'        => $request->input('num_doc'),
            'cta_ctble'       => $request->input('cta_ctble'),
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
            'num_doc'       => 'required',
            'fecha_orig'    => 'required',
            'fecha_proc'    => 'required',
            'valor'         => 'required',
            'tipo_doc'      => 'required',
            'cod_sp'        => 'required',
            'cod_sp_sec'    => 'required',
            'ncf'           => 'required',
            'cod_cia'       => 'required',
            'aplica_a'      => 'required',
            'estado'        => 'required',
        ],$messages);       

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cpnotas_debito_credito  $cpnotas_debito_credito
     * @return \Illuminate\Http\Response
     */
    public function show(cpnotas_debito_credito $cpnotas_debito_credito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cpnotas_debito_credito  $cpnotas_debito_credito
     * @return \Illuminate\Http\Response
     */
    public function edit(cpnotas_debito_credito $cpnotas_debito_credito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cpnotas_debito_credito  $cpnotas_debito_credito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cpnotas_debito_credito $cpnotas_debito_credito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cpnotas_debito_credito  $cpnotas_debito_credito
     * @return \Illuminate\Http\Response
     */
    public function destroy(cpnotas_debito_credito $cpnotas_debito_credito)
    {
        //
    }
}
