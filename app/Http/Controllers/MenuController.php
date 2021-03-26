<?php

namespace App\Http\Controllers;

use App\Librerias\Menu;
use Illuminate\Http\Request;

class MenuController extends ApiResponseController
{

    public function index()
    {
        $menu = Menu::join('modulos','modulos.id','=','menus.modulo')->
                      select('menus.*','modulos.icon','modulos.modulo as nombre_modulo')->
                      get();
        if ($menu == null){
            return $this->errorResponse($menu);
        }
        return $this->successResponse($menu);
    }
    
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $menu = Menu::where('modulo','=',$id)->
                      orderBy('codigo')->
                      get();
                      
        if ($menu == null){
            return $this->successResponse($menu);
        }
        return $this->successResponse($menu);
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
