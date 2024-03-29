<?php

namespace App\Http\Controllers\contabilidadGeneral;
use Carbon\Carbon;

use App\Mail\pagosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\listaDeudoresMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ApiResponseController;
use App\Librerias\cuentasXcobrar\cc_transacciones;

class CcTransaccionesController extends ApiResponseController
{
    public function index(Request $request)
    {
        return response()->json('test');
    }
    
    public function store(Request $request)
    {
        $datos = $request->all();
        $datos = array (
            "cuenta_no"	=> "",
            "cod_cia"	=> "",
            "tipo_doc"	=> "",
            "num_doc" => "",
            "tipo_cliente" => "",
            "sec_cliente" => "",
            "cod_emp" => "",
            "cod_emp_sec" => "",
            "fecha_orig" => "",
            "fecha_ven"	=> "",
            "aplica_a" => "",
            "banco"	=> "",
            "num_cheque" => "",
            "valor"	=> "",
            "valor_efectivo" => "",
            "valor_cheque" => "",
            "costo"	 => "",
            "monto_desc"	 => "",
            "bodega"	 => "",
            "factura_ext"	 => "",
            "tipo_doc_aplica"	 => "",
            "documento_ref"	 => "",
            "valor_tarjeta"	 => "",
            "efectivo"	 => "",
            "ck_tr_dp"	 => "",
            "tar_cr_db"	 => "",
            "num_oc"	 => "",
            "num_req"	 => "",
            "enviado" => "",
            "estado"	 => "",
            "usuario_creador" => ""
        );
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

    public function avisoPagos(Request $request)
    {
        $date = Carbon::now(); 
        $hoy = $date->format('Y-m-d H:i:s');
        
        // $date->endOfMonth()->toDateString(); 

        // $date->modify('-3 day');        
        // $rango['desde'] = $date->format('Y-m-d H:i:s');

        // $date->modify('+6 day');
        // $rango['hasta'] = $date->format('Y-m-d H:i:s');

        $deudores = cc_transacciones::select('cc_transacciones.cuenta_no','cc_transacciones.fecha_ven','cc_transacciones.aplica_a',
                                             'mov_ventas.veclientes.nombre','mov_ventas.veclientes.email','mov_ventas.veclientes.celular','mov_ventas.veclientes.telefono_casa',
                                            DB::Raw('SUM(cc_transacciones.valor - cc_transacciones.monto_desc) as deuda')
                                            )->
                                    join('mov_ventas.veclientes',[['mov_ventas.veclientes.tipo_cliente','=','cc_transacciones.tipo_cliente'],
                                                       ['mov_ventas.veclientes.sec_cliente','=','cc_transacciones.sec_cliente']])->
                                    // wherebetween('cc_transacciones.fecha_ven',[$rango['desde'], $rango['hasta']])->  
                                    where([['cc_transacciones.estado','=','ACTIVO'],['cc_transacciones.fecha_ven','<',$hoy]])-> 
                                    groupby('cc_transacciones.cuenta_no','cc_transacciones.fecha_ven','cc_transacciones.aplica_a',
                                            'mov_ventas.veclientes.nombre','mov_ventas.veclientes.email','mov_ventas.veclientes.celular','mov_ventas.veclientes.telefono_casa')->
                                    having('deuda', '>', 0)->
                                    get();
        //return $this->successResponse($deudores, $request->urlRequest);
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
            return $this->successResponse($deudores, $request->urlRequest);
        }else{
            return $this->successResponse(1, $request->urlRequest);
        }
    }
}
