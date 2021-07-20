<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ApiResponseController;

use App\Librerias\Modulos;
use App\Librerias\Perfiles;
use App\Librerias\Menu;
use Illuminate\Http\Request;

class ModulosController extends ApiResponseController
{
    
    public function index(Request $request)
    {
        $modulos = Modulos::orderBy('orden', 'asc')->get();
        return $this->successResponse($modulos, $request->urlRequest);
    }

    public function autoLlenado(Request $request)
    {
        $respuesta = array();
        
        $modulos = Modulos::orderBy('orden', 'asc')->get();

        $perfiles = Perfiles::orderBy('created_at', 'desc')->get();

        $menu = Menu::join('modulos','modulos.id','=','menus.modulo')->
                      select('menus.*','modulos.icon','modulos.modulo as nombre_modulo')->
                      get();


        $_modulos = array("label" => 'modulos', "data" => $modulos, "icono" => 'fas fa-dolly-flatbed');
        $_perfiles = array("label" => 'perfiles', "data" => $perfiles, "icono" => 'fas fa-dolly-flatbed');
        $_menu = array("label" => 'menu', "data" => $menu, "icono" => 'fas fa-dolly-flatbed');

        array_push($respuesta,$_modulos);
        array_push($respuesta,$_perfiles);
        array_push($respuesta,$_menu);

        return $this->successResponse($respuesta, $request->urlRequest);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Modulos $modulos)
    {
        //
    }

    public function update(Request $request, Modulos $modulos)
    {
        //
    }

    public function destroy(Modulos $modulos)
    {
        //
    }
}
