<?php

namespace App\Http\Controllers\cuentasXpagar;
use App\Http\Controllers\ApiResponseController;

use App\Librerias\cpAnalisisSaldoPendiente;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class CpAnalisisSaldoPendienteController extends ApiResponseController
{
    public function index(Request $request)
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

    public function show(Request $request)
    {
      
    }

    public function update(Request $request, cpAnalisisSaldoPendiente $cpAnalisisSaldoPendiente)
    {
        //
    }

    public function destroy(cpAnalisisSaldoPendiente $cpAnalisisSaldoPendiente)
    {
        //
    }

    public function reporte(request $request){

        $cxp = cpAnalisisSaldoPendiente::select('cod_sp','cod_sp_sec','nom_sp','aplica_a','dias','pendiente')->get();
        $proveedores = cpAnalisisSaldoPendiente::select('cod_sp','cod_sp_sec','nom_sp')->groupby('cod_sp','cod_sp_sec','nom_sp')->get(); 

        $resultado = array();

        foreach ($proveedores as $key => $value) {

            $pendiente = 0;
            $dias = 0;
            $de0a30 = 0;
            $de31a60 = 0;
            $de61a90 = 0;
            $de91a120 = 0;
            $mas120 = 0;
            $deuda = array();

            for($i=0; $i < count($cxp); $i++) {
                if(($value->cod_sp.'-'.$value->cod_sp_sec) == ($cxp[$i]['cod_sp'].'-'.$cxp[$i]['cod_sp_sec'])) {
                    $pendiente += $cxp[$i]['pendiente'];
                    
                    if ($cxp[$i]['dias'] <= 30) {
                        $de0a30 += $cxp[$i]['pendiente'];
                    }
                    
                    if ($cxp[$i]['dias'] >= 31 and $cxp[$i]['dias'] <= 60) {
                        $de31a60 += $cxp[$i]['pendiente'];
                    }

                    if ($cxp[$i]['dias'] >= 61 and $cxp[$i]['dias'] <= 90) {
                        $de61a90 += $cxp[$i]['pendiente'];
                    }

                    if ($cxp[$i]['dias'] >= 91 and $cxp[$i]['dias'] <= 120) {
                        $de91a120 += $cxp[$i]['pendiente'];
                    }

                    if ($cxp[$i]['dias'] >= 121) {
                        $mas120 += $cxp[$i]['pendiente'];
                    }  
                }
                $deuda = array(
                    "proveedor" => '('.$value->cod_sp.'-'.$value->cod_sp_sec.')'.ucwords($value->nom_sp),
                    "de0a30"=> $de0a30,
                    "de31a60"=> $de31a60,
                    "de61a90"=> $de61a90,
                    "de91a120"=> $de91a120,
                    "mas120"=> $mas120,
                    "pendiente"=> $pendiente
                );
            }
            array_push($resultado, $deuda);
        }
        // return response()->json($resultado);
        $pdf = PDF::loadView('saldo-pendiente', compact('resultado'));
        return $pdf->stream('analisis-pendiente-pagoCxp.pdf');
    }
}
