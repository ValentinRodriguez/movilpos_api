<?php

namespace App\Http\Controllers;

use App\Librerias\cgTransaccionesContables;
use App\Librerias\cgTipoDocumento;
use App\Librerias\proveedores;
use App\Librerias\tipoMonedas;
use App\Librerias\coTipoOrden;

use Illuminate\Http\Request;

class CgTransaccionesContablesController extends ApiResponseController
{    
    public function index()
    {
        //
    }
    
    
    public function autoLlenado()
    {        
        $respuesta = array();

        $tipoDocumentos = cgTipoDocumento::all();

        $proveedores= proveedores::join('ciudades', 'ciudades.id_ciudad','=','proveedores.id_ciudad')->
                                join('paises', 'paises.id_pais','=','proveedores.id_pais')->
                                select('proveedores.*','ciudades.descripcion as ciudad','paises.descripcion as pais') ->
                                where('proveedores.estado','=','activo')->
                                get();

        $coTipoOrdenes = coTipoOrden::all();

        $monedas = tipoMonedas::orderBy('created_at', 'desc')->where('estado','=','ACTIVO')->get();

        $_tipoDocumentos = array("label" => 'tipo documentos', "data" => $tipoDocumentos, "icono" => 'fas fa-dolly-flatbed');
        $_proveedores = array("label" => 'proveedores', "data" => $proveedores, "icono" => 'fas fa-dolly-flatbed');
        $_monedas = array("label" => 'monedas', "data" => $monedas, "icono" => 'fas fa-dolly-flatbed');
        $_coTipoOrdenes = array("label" => 'tipo ordenes', "data" => $coTipoOrdenes, "icono" => 'fas fa-dolly-flatbed');

        array_push($respuesta,$_tipoDocumentos);
        array_push($respuesta,$_proveedores);
        array_push($respuesta,$_monedas);
        array_push($respuesta,$_coTipoOrdenes);

        return $this->successResponse($respuesta);
    }

    public function store(Request $request)
    {
        //
    }
    
    public function show($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function destroy($id)
    {
        //
    }
}
