<?php

namespace App\Http\Controllers;

use App\Librerias\cpAnalisisSaldoPendiente;
use Illuminate\Http\Request;
use PDF;
use DateTime;
use App\Http\Controllers\Date;
use Illuminate\Support\Facades\DB;

class CpAnalisisSaldoPendienteController extends ApiResponseController
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cpAnalisisSaldoPendiente  $cpAnalisisSaldoPendiente
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cpAnalisisSaldoPendiente  $cpAnalisisSaldoPendiente
     * @return \Illuminate\Http\Response
     */
    public function edit(cpAnalisisSaldoPendiente $cpAnalisisSaldoPendiente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cpAnalisisSaldoPendiente  $cpAnalisisSaldoPendiente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cpAnalisisSaldoPendiente $cpAnalisisSaldoPendiente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cpAnalisisSaldoPendiente  $cpAnalisisSaldoPendiente
     * @return \Illuminate\Http\Response
     */
    public function destroy(cpAnalisisSaldoPendiente $cpAnalisisSaldoPendiente)
    {
        //
    }


    public function reporte(request $request){
    
        $fechainicial       =$request->get('fechainicial');

        $date = new DateTime($fechainicial);
        $date->format('Y-m-d'); 
    

        if($fechainicial == null){
            $fechainicial = 'DEBES ENVIAR LA FECHA INICIAL DEL PERIODO o no estas enviando <fechainicial> en el request';
            return $this->errorResponse($fechainicial);
        }
        
        //$fecha1 = strtotime($fechainicial);

       // return response()->json($date);
        $cxp = cpAnalisisSaldoPendiente::    
        where('a.fecha_orig','<=','2021-03-13')->
        select('a.cod_sp','a.cod_sp_sec','a.tipo_doc','a.num_doc','a.fecha_orig', 
              'a.aplica_a',   
        DB::raw('sum(a.valor)'))->
      groupby('a.cod_sp','a.cod_sp_sec','a.tipo_doc','a.num_doc','a.fecha_orig','a.aplica_a')->
        get();                       
        return response()->json($cxp);
      //  $pdf = PDF::loadView('cxp', compact('cxp'));
        //return $pdf->stream('analisis-pendiente-pagoCxp.pdf');
    }
}
