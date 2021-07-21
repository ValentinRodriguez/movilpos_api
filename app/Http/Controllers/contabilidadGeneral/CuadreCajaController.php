<?php

namespace App\Http\Controllers\contabilidadGeneral;
use App\Http\Controllers\ApiResponseController;

use App\Librerias\cuadreCaja;
use App\Librerias\turnos;
use App\Librerias\sucursales;
use App\Librerias\Nopuesto;
use App\Librerias\noempleados;
use App\Librerias\areasEmpresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CuadreCajaController extends ApiResponseController
{
    public function index(Request $request)
    {
        $cuadre = cuadreCaja::where('estado','=','activo')->get();
        return $this->successResponse($cuadre, $request->urlRequest);
    }

    public function autollenado(Request $request){ 
        try {
            $respuesta = array();
            $temp1 = array();            
            $i=0;
            
            $sucursales = sucursales::join('paises','paises.id_pais','=','sucursales.id_pais')->
                                    join('ciudades','ciudades.id_ciudad','=','sucursales.id_ciudad')->
                                    join('regiones','regiones.id_region','=','sucursales.id_region')->
                                    join('municipios','municipios.id_municipio','=','sucursales.id_municipio')->
                                    join('provincias','provincias.id_provincia','=','sucursales.id_provincia')->
                                    leftjoin('sectores','sectores.id_sector','=','sucursales.id_sector')->
                                    select('sucursales.*',
                                            'paises.descripcion as pais',
                                            'ciudades.descripcion as ciudad',
                                            'municipios.descripcion as municipio',
                                            'regiones.descripcion as region',
                                            'sectores.descripcion as sector',
                                            'provincias.descripcion as provincia')->        
                                    orderBy('created_at', 'desc')->
                                    where('sucursales.estado','=','ACTIVO')->get();
        
            foreach ($sucursales as $key => $value) {
                $temp2 = array(
                    "pais" => $sucursales[$i]['pais'],
                    "ciudad" => $sucursales[$i]['ciudad'],
                    "municipio" => $sucursales[$i]['municipio'],
                    "region" => $sucursales[$i]['region'],
                    "sector" => $sucursales[$i]['sector'],
                    "provincia" => $sucursales[$i]['provincia'],
                    "calle" => $sucursales[$i]['calle'],
                );
                array_push($temp1,$temp2);
                $value->detalle = $temp1;
                $i++;
            }


            $noempleados = noempleados::orderBy('id', 'asc')->
                                join('nodepartamentos','noempleados.departamento','=','nodepartamentos.id')->
                                join('nopuestos','noempleados.id_puesto','=','nopuestos.id_puesto')->
                                join('ciudades','noempleados.id_ciudad','=','ciudades.id_ciudad')->
                                join('paises','noempleados.id_pais','=','paises.id_pais')->
                                leftjoin('tipo_monedas','noempleados.id_moneda','=','tipo_monedas.id')->
                                select('noempleados.*',DB::raw("CONCAT(noempleados.primernombre,' ',noempleados.primerapellido) AS nombre_empleado"),
                                       'nodepartamentos.titulo as depto',
                                       'nopuestos.descripcion as puesto',
                                       'ciudades.descripcion as ciudad',
                                       'paises.descripcion as pais',
                                       'tipo_monedas.divisa as divisa','tipo_monedas.simbolo as simbolo_moneda'
                                )->
                                where([['.noempleados.id_puesto','=', 2],['noempleados.estado','=','ACTIVO']])->
                                get();
            
            $turnos = turnos::orderBy('created_at', 'desc')->where('estado','=','ACTIVO')->get();
            
            $caja = areasEmpresa::orderBy('created_at', 'desc')->where([['estado','=','ACTIVO'],['id','=',1]])->get();

            $_turnos = array("label" => 'turnos', "data" => $turnos, "icono" => 'fas fa-dolly-flatbed');
            $_sucursales = array("label" => 'sucursales', "data" => $sucursales, "icono" => 'fas fa-dolly-flatbed');
            $_noempleados = array("label" => 'empleado-caja', "data" => $noempleados, "icono" => 'fas fa-dolly-flatbed');
            $_caja = array("label" => 'area-caja', "data" => $caja, "icono" => 'fas fa-dolly-flatbed');

            array_push($respuesta,$_turnos);
            array_push($respuesta,$_noempleados);
            array_push($respuesta,$_sucursales);
            array_push($respuesta,$_caja);

            return $this->successResponse($respuesta, $request->urlRequest);      
        } catch (\Exception $e ){
            return $this->errorResponse($e->getMessage(), $request->urlRequest);
        }
    }

    public function store(Request $request)
    {
        //
    }
    
    public function show(cuadreCaja $cuadreCaja)
    {
        //
    }

    public function update(Request $request, cuadreCaja $cuadreCaja)
    {
        //
    }
    
    public function destroy(cuadreCaja $cuadreCaja)
    {
        //
    }

    public function busqueda(Request $request)
    {
        $cuadre = cuadreCaja::where('estado','=','activo')->get();
        return $this->successResponse($cuadre, $request->urlRequest);
    }
}
