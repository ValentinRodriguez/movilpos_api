<?php

namespace App\Http\Controllers\tienda;
use Illuminate\Http\Request;
use App\Librerias\tienda\SubCategoria;
use App\Librerias\tienda\CategoriaStore;
use App\Librerias\tienda\SubSubCategoria;
use App\Http\Controllers\ApiResponseController;

class CategoriaStoreController extends ApiResponseController
{
    public function index()
    {
        $categoria = CategoriaStore::orderBy('created_at', 'desc')->
                                     where('estado','=','activo')->
                                     get();

        foreach ($categoria as $key => $value1) {
            $subCategoria = SubCategoria::where('id_categoria','=',$value1->id_categoria)->get();
            $value1->children = $subCategoria;
            $value1->depth = 0;
            $value1->url = $value1->slug;

            foreach ($subCategoria as $key => $value) {
                $subsubCategoria = SubSubCategoria::where('id_subcategoria','=',$value->id_subcategoria)->get();

                foreach ($subsubCategoria as $key => $value2) {
                    $value2->depth = 2;
                    $value2->url = $value->slug.'/'.$value1->slug.'/'.$value2->slug;
                }
                $value->children = $subsubCategoria;
                $value->depth = 1;
                $value->url = $value->slug.'/'.$value1->slug;
                
            }
        }
        return $this->successResponse($categoria);
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show(CategoriaStore $categoriaStore)
    {
        //
    }
    
    public function update(Request $request, CategoriaStore $categoriaStore)
    {
        //
    }
    
    public function destroy(CategoriaStore $categoriaStore)
    {
        //
    }
}
