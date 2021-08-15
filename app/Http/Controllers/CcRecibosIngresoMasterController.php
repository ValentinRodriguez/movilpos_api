<?php

namespace App\Http\Controllers;

use App\cc_recibos_ingreso_master;
use Illuminate\Http\Request;

class CcRecibosIngresoMasterController extends Controller
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
        $datosm=array(
            'cod_cia'                  => $request->input('cod_cia'),
            'tipo_doc'                 =>$request->input('tipo_doc'),
            'num_doc'                  =>$request->input('num_doc'),
            'tipo_cliente'             =>$request->input('tipo_cliente'),
            'sec_cliente'              =>$request->input('sec_cliente'),
            'cod_emp'                  =>$request->input('cod_emp'),
            'cod_emp_sec'              =>$request->input('cod_emp_sec'),
            'fecha_orig'               =>$request->input('fecha_orig'),
            'fecha_ven'                =>$request->input('fecha_ven'),
            'aplica_a'                  =>$request->input('aplica_a'),
            'banco'                     =>$request->input('banco'),
            'num_cheque'                =>$request->input('num_cheque'),
            'valor'                     =>$request->input('valor'),
            'valor_efectivo'            =>$request->input('valor_efectivo'),
            'valor_cheque'              =>$request->input('valor_cheque'),
            'costo'                     =>$request->input('costo'),
            'status_t'                  =>'actvo',
            'usuario_creador'           =>$request->input('usuario_creador'),
            'tipo_doc_aplica'           =>$request->input('tipo_doc_aplica'),
            'valor_targeta'             =>$request->input('valor_targeta')

        );
        $message=[
            'required'   => 'El campo  :attribute es requerido',
            'unique'     => 'El campo  :attribute debe ser unico',
            'numeric'    => 'el campo  :attribute debe ser numerico'
        ];

        $validator =validator($datosm,[
            'tipo_cliente'  =>'required',
            'sec_cliente'   =>'required',
            'tipo_doc'      =>'required'
        ],$message))

        if ($validator->fails()){
            $errors =$validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{
                    return $this->errorResponseParams('No hay facturas Agregadas')
                }
                db::commit();

                return $this->successResponse($datosd)
            } 
            catch(\Exception $e){
                return $this->errorresponse($e);
            } 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cc_recibos_ingreso_master  $cc_recibos_ingreso_master
     * @return \Illuminate\Http\Response
     */
    public function show(cc_recibos_ingreso_master $cc_recibos_ingreso_master)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cc_recibos_ingreso_master  $cc_recibos_ingreso_master
     * @return \Illuminate\Http\Response
     */
    public function edit(cc_recibos_ingreso_master $cc_recibos_ingreso_master)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cc_recibos_ingreso_master  $cc_recibos_ingreso_master
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cc_recibos_ingreso_master $cc_recibos_ingreso_master)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cc_recibos_ingreso_master  $cc_recibos_ingreso_master
     * @return \Illuminate\Http\Response
     */
    public function destroy(cc_recibos_ingreso_master $cc_recibos_ingreso_master)
    {
        //
    }
}
