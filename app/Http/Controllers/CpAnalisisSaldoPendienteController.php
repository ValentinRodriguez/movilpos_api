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
     
        $pdf = PDF::loadView('saldo-pendiente', compact('result'));
        return $pdf->stream('analisis-pendiente-pagoCxp.pdf');
    }
}
