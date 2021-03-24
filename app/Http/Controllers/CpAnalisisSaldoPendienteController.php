<?php

namespace App\Http\Controllers;

use App\Librerias\cpAnalisisSaldoPendiente;
use App\Librerias\Empresa;
use Illuminate\Http\Request;
use PDF;
use DateTime;
use App\Http\Controllers\Date;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        
        $dia30=0;
        $dia31a60=0;
        $dia61a90=0;
        $dia91a120=0;
        $mas120=0;

        $data=array();
     
        $fechainicial  =$request->get('fechainicial');
           
        $date = Carbon::parse($fechainicial);
    

        if($fechainicial == null){
            $fechainicial = 'DEBES ENVIAR LA FECHA INICIAL DEL PERIODO o no estas enviando <fechainicial> en el request';
            return $this->errorResponse($fechainicial);
        }
        
        //$fecha1 = strtotime($fechainicial);
         
       
       // return response()->json($date);
        $cxp = cpAnalisisSaldoPendiente::    
         where('a.fecha_orig','<=',$date)->
         select('a.cod_sp','a.cod_sp_sec')->
         groupby('a.cod_sp','a.cod_sp_sec')->
         get();   
         
    
        
         
        
        for ($i=0; $i < count($cxp) ; $i++) {
            
        
            $cxp1 = cpAnalisisSaldoPendiente:: 
            where([['a.fecha_orig','<=',$date],['a.cod_sp_sec','=',$cxp[$i]['cod_sp_sec']],
                  ['a.cod_sp','=',$cxp[$i]['cod_sp']]])->
            join('proveedores',function($join){
                $join->on('a.cod_sp','=','proveedores.cod_sp')->
                where('a.cod_sp_sec','=','1' );})-> 
            select( 'proveedores.nom_sp',DB::raw('sum(a.valor) as valor'))->
            groupby('proveedores.nom_sp')->
            get(); 
           
           array_push($data,$cxp1);
           
         
   
        }
        $empresa = Empresa::orderBy('created_at', 'desc')->first();
     
      #  $fecha1=$date->diffInDays($data[0]['fecha_orig']);
        
        foreach ($data as $key => $value) {
            $value->empresa=$empresa;
            //$value->fecha=$fecha1;
            
          
         
        }
       

          return response()->json($data);
        $pdf = PDF::loadView('saldo-pendiente', compact('data'));
        return $pdf->stream('analisis-pendiente-pagoCxp.pdf');
    }
}
