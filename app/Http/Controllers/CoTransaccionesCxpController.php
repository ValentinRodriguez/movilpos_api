<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Librerias\coTransacciones_cxp;
use App\Librerias\proveedores;
use App\Librerias\coCuentas_cxp;
use App\Librerias\ve_CondicionesPago;
use App\Librerias\tipoMonedas;

class CoTransaccionesCxpController extends Controller
{
    public function index()
    {
        $facturas = coTransacciones_cxp::orderBy('created_at', 'desc')->where('estado','=','ACTIVO')->get();

        return $this->successResponse($facturas);
    }

    public function autollenado()
    {
        $respuesta = array();

        try {
            $proveedores = proveedores::join('ciudades', 'ciudades.id_ciudad','=','proveedores.id_ciudad')->
                            join('paises', 'paises.id_pais','=','proveedores.id_pais')->
                            select('proveedores.*','ciudades.descripcion as ciudad','paises.descripcion as pais') ->
                            where('proveedores.estado','=','activo')->
                            get();
            foreach ($proveedores as $key => $value) {
                $coCuentas_cxp = coCuentas_cxp::where([['co_cuentas_proveedores.cod_sp','=',$value->cod_sp],
                                                                    ['co_cuentas_proveedores.cod_sp_sec','=',$value->cod_sp_sec],
                                                                    ['co_cuentas_proveedores.estado','=','activo']])->
                                                        
                                                        get();
                $value->cuentas_proveedor = $coCuentas_cxp;
            }
            $condiciones = ve_CondicionesPago::orderBy('id', 'asc')->where('estado','=','activo')->get();    

            $monedas     = tipoMonedas::orderBy('created_at', 'desc')->where('estado','=','ACTIVO')->get();

            $_proveedores = array("label" => 'proveedores', "data" => $proveedores, "icono" => 'fas fa-dolly-flatbed');
            $_condiciones = array("label" => 'condiciones', "data" => $condiciones, "icono" => 'fas fa-dolly-flatbed');
            $_monedas     = array("label" => 'monedas', "data" => $monedas, "icono" => 'fas fa-dolly-flatbed');

            array_push($respuesta,$_proveedores);
            array_push($respuesta,$_condiciones);
            array_push($respuesta,$_monedas);

            return $this->successResponse($respuesta);
        } catch (\Exception $e ){
            return $this->errorResponse($e);
        }
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show(coTransacciones_cxp $coTransacciones_cxp)
    {
        //
    }

    public function update(Request $request, coTransacciones_cxp $coTransacciones_cxp)
    {
        //
    }
    
    public function destroy(coTransacciones_cxp $coTransacciones_cxp)
    {
        //
    }
}
