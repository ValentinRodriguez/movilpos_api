<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Librerias\cgcatalogo;
use App\Librerias\Empresa;
use App\Librerias\ve_CondicionesPago;

class Home extends ApiResponseController
{
    public function autollenado(){ 
        try {
            $respuesta = array();

            $catalogo = cgcatalogo::orderBy('nivel','asc')->where('estado','=','ACTIVO')->get();                                       
            $empresa = Empresa::orderBy('created_at', 'desc')->where('estado','=','ACTIVO')->get();
            $condiciones = ve_CondicionesPago::orderBy('id', 'asc')->where('estado','=','activo')->get();

            $_empresa = array("label" => 'empresa', "data" => $empresa, "icono" => 'fas fa-dolly-flatbed');
            $_catalogo = array("label" => 'catalogo', "data" => $catalogo, "icono" => 'fas fa-dolly-flatbed');
            $_condiciones = array("label" => 'condiciones', "data" => $condiciones, "icono" => 'fas fa-dolly-flatbed');
            
            array_push($respuesta,$_empresa);
            array_push($respuesta,$_catalogo);
            array_push($respuesta,$_condiciones);

            return $this->successResponse($respuesta);      
        } catch (\Exception $e ){
            return $this->errorResponse($e->getMessage());
        }
    }
}
