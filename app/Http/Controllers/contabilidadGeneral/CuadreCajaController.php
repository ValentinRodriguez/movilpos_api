<?php

namespace App\Http\Controllers\contabilidadGeneral;
use App\Librerias\Nopuesto;

use Illuminate\Http\Request;
use App\Librerias\rrhh\turnos;
use Illuminate\Support\Facades\DB;
use App\Librerias\rrhh\noempleados;
use App\Librerias\empresa\sucursales;
use App\Librerias\empresa\areasEmpresa;
use App\Http\Controllers\ApiResponseController;
use App\Librerias\contabilidadGeneral\cuadreCaja;

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
            
            $sucursales = sucursales::join('mov_globales.paises','mov_globales.paises.id_pais','=','mov_empresa.sucursales.id_pais')->
                                    join('mov_globales.ciudades','mov_globales.ciudades.id_ciudad','=','mov_empresa.sucursales.id_ciudad')->
                                    join('mov_globales.regiones','mov_globales.regiones.id_region','=','mov_empresa.sucursales.id_region')->
                                    join('mov_globales.municipios','mov_globales.municipios.id_municipio','=','mov_empresa.sucursales.id_municipio')->
                                    join('mov_globales.provincias','mov_globales.provincias.id_provincia','=','mov_empresa.sucursales.id_provincia')->
                                    leftjoin('mov_globales.sectores','mov_globales.sectores.id_sector','=','mov_empresa.sucursales.id_sector')->
                                    select('mov_empresa.sucursales.*',
                                            'mov_globales.paises.descripcion as pais',
                                            'mov_globales.ciudades.descripcion as ciudad',
                                            'mov_globales.municipios.descripcion as municipio',
                                            'mov_globales.regiones.descripcion as region',
                                            'mov_globales.sectores.descripcion as sector',
                                            'mov_globales.provincias.descripcion as provincia')->        
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
                                join('mov_globales.ciudades','noempleados.id_ciudad','=','mov_globales.ciudades.id_ciudad')->
                                join('mov_globales.paises','noempleados.id_pais','=','mov_globales.paises.id_pais')->
                                leftjoin('mov_empresa.tipo_monedas','noempleados.id_moneda','=','mov_empresa.tipo_monedas.id')->
                                select('noempleados.*',DB::raw("CONCAT(noempleados.primernombre,' ',noempleados.primerapellido) AS nombre_empleado"),
                                       'mov_rrhh.nodepartamentos.titulo as depto',
                                       'nopuestos.descripcion as puesto',
                                       'mov_globales.ciudades.descripcion as ciudad',
                                       'mov_globales.paises.descripcion as pais',
                                       'mov_empresa.tipo_monedas.divisa as divisa','mov_empresa.tipo_monedas.simbolo as simbolo_moneda'
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
