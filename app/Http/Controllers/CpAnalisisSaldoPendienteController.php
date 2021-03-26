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
        

    
     
        $cxp = cpAnalisisSaldoPendiente::
            select('cod_sp','cod_sp_sec','nom_sp','aplica_a','dias','pendiente')
            ->get();

         //   return response()->json($cxp);
        $result = array();
        foreach($cxp as $t) {
            $repeat=false;
            for($i=0;$i<count($result);$i++)
            {
                if($result[$i]['nom_sp']==$t['nom_sp'])
                //    if ($result[$i]['aplica_a']==$t['aplica_a']) {                    
                {
                    $result[$i]['pendiente']+=$t['pendiente'];
                    $repeat=true;
                    break;
                }
                 //   }
            }
            if($repeat==false)
                $result[] = array('nom_sp' => $t['nom_sp'], 'pendiente' => $t['pendiente']);
        }

        return response()->json($result);
      /*  $dia30=0;
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
        join('proveedores',function($join){
            $join->on('a.cod_sp','=','proveedores.cod_sp')->
            where('a.cod_sp_sec','=','1' );})->   
         where('a.fecha_orig','<=',$date)->
         select('a.cod_sp','a.cod_sp_sec','proveedores.nom_sp','a.num_doc','a.fecha_orig',
         DB::raw('sum(a.valor) as valor'))->
         groupby('a.cod_sp','a.cod_sp_sec','proveedores.nom_sp','a.num_doc','a.fecha_orig')->
         get();   
         
        
       
         $empresa = Empresa::orderBy('created_at', 'desc')->first();
        
        for ($i=0; $i < count($cxp) ; $i++) {
            
              

            $cxp1 = cpAnalisisSaldoPendiente::  
             where([['a.cod_sp','=',$cxp[$i]->cod_sp],['a.cod_sp_sec','=',$cxp[$i]->cod_sp_sec],
             ['a.aplica_a','=',$cxp[$i]->num_doc],['a.fecha_orig','<=',$date],['a.tipo_doc','!=','FT']])->
             select(DB::raw('sum(a.valor) as valor'))->
             get();   
         
           array_push($data,$cxp1);

          //  $fecha1=$date->diffInDays($data->fecha_orig);
           // $cxp[$i]->fecha=$fecha1;
            $cxp[$i]->empresa=$empresa;
            //$cxp[$i]->valor=$data[0]->valor;
            
        }
     

        for ($i=0; $i < count($data) ; $i++) { 
           
            $dia30=$data[$i]['valor'];
        }
        return response()->json($dia30);
      */
        $pdf = PDF::loadView('saldo-pendiente', compact('result'));
        return $pdf->stream('analisis-pendiente-pagoCxp.pdf');
    }
}
