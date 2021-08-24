<?php

namespace App\Http\Controllers\globales;
use Illuminate\Http\Request;

use App\Librerias\globales\Menu;
use App\Http\Controllers\ApiResponseController;

class MenuController extends ApiResponseController
{

    public function index(Request $request)
    {
        
        $menu = Menu::join('modulos','modulos.id','=','menus.modulo')->
                      select('menus.*','modulos.icon','modulos.modulo as nombre_modulo')->
                      get();
                      
        return $this->successResponse($menu, $request->urlRequest);
    }
    
    public function store(Request $request)
    {
        //
    }

    public function show(Request $request,$id)
    {
        // return response()->json();
        $menu = Menu::where('modulo','=',$id)->orderBy('codigo')->get();                      
        return $this->successResponse($menu, $request->urlRequest);
    }

    public function update(Request $request, Menu $menu)
    {
        //
    }

    public function destroy(Menu $menu)
    {
        //
    }


}
