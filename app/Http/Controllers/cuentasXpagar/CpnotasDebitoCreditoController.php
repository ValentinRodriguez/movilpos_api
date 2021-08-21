<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\ApiResponseController;
use App\Librerias\cuentasXpagar\cpnotas_debito_credito;

class cpnotasDebitoCreditoController extends ApiResponseController
{
    public function index(Request $request)
    {
        //
    }
    
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
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }
    }
    
    public function show(cpnotas_debito_credito $cpnotas_debito_credito)
    {
        //
    }

    public function update(Request $request, cpnotas_debito_credito $cpnotas_debito_credito)
    {
        //
    }
    
    public function destroy(cpnotas_debito_credito $cpnotas_debito_credito)
    {
        //
    }
}
