<?php

namespace App\Http\Controllers;

use App\Librerias\cc_transacciones;
use App\Mail\pagosMailable;
use App\Mail\listaDeudoresMailable;
use App\Http\Controllers\MensajeriaSMScontroller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
// setlocale(LC_MONETARY,"en_US");

class CcTransaccionesController extends ApiResponseController
{
    public function index()
    {
        //
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show(cc_transacciones $cc_transacciones)
    {
        //
    }
    
    public function update(Request $request, cc_transacciones $cc_transacciones)
    {
        //
    }
    
    public function destroy(cc_transacciones $cc_transacciones)
    {
        //
    }

    public function avisoPagos()
    {
        $date = Carbon::now(); 
        $hoy = $date->format('Y-m-d H:i:s');
        
        // $date->endOfMonth()->toDateString(); 

        // $date->modify('-3 day');        
        // $rango['desde'] = $date->format('Y-m-d H:i:s');

        // $date->modify('+6 day');
        // $rango['hasta'] = $date->format('Y-m-d H:i:s');

        $deudores = cc_transacciones::select('cc_transacciones.cuenta_no','cc_transacciones.fecha_ven','cc_transacciones.aplica_a',
                                             'veclientes.nombre','veclientes.email','veclientes.celular','veclientes.telefono_casa',
                                            DB::Raw('SUM(cc_transacciones.valor - cc_transacciones.monto_desc) as deuda'))->
                                    join('veclientes',[['veclientes.tipo_cliente','=','cc_transacciones.tipo_cliente'],
                                                       ['veclientes.sec_cliente','=','cc_transacciones.sec_cliente']])->
                                    // wherebetween('cc_transacciones.fecha_ven',[$rango['desde'], $rango['hasta']])->  
                                    where([['cc_transacciones.estado','=','ACTIVO'],['cc_transacciones.fecha_ven','<',$hoy]])-> 
                                    groupby('cc_transacciones.cuenta_no','cc_transacciones.fecha_ven','cc_transacciones.aplica_a',
                                            'veclientes.nombre','veclientes.email','veclientes.celular','veclientes.telefono_casa')->
                                    having('deuda', '>', 0)->
                                    get();
        //return $this->successResponse($deudores);
        if (count($deudores) != 0) {
            Mail::to('vrodriguez@movilsoluciones.com.do')->send(new listaDeudoresMailable($deudores));
            // $SMS = new MensajeriaSMScontroller;
            // $WS = new  MensajeriaWScontroller;

            foreach ($deudores as $key => $value) {
                Mail::to($value->email)->send(new pagosMailable($deudores));
                // $mensaje = 'Saludos Sr/a *'.strtoupper($value->nombre).'* El pago referente a la factura *'.$value->aplica_a.'* vence el *'.$value->fecha_ven.'* la misma presenta un balance pendiente de *$RD'. 
                //             number_format($value->deuda, 2).'* favor pasar a realizar el pago antes de la fecha especificada.';
                
                // $telefono = preg_replace('([^A-Za-z0-9])', '', $value->celular);
                
                // $SMS->send($mensaje,$telefono);
                // $WS->send($mensaje,$telefono);
                // cc_transacciones::where('aplica_a', $value->aplica_a)->update(['enviado' => 'si']);
            }
            return $this->successResponse($deudores);
        }else{
            return $this->successResponse(1);
        }
    }
}
