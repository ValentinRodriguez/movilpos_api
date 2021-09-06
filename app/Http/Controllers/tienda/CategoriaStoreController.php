<?php

namespace App\Http\Controllers\tienda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Librerias\tienda\SubCategoria;
use App\Librerias\tienda\CategoriaStore;
use App\Librerias\tienda\SubSubCategoria;
use App\Http\Controllers\ApiResponseController;
use App\Librerias\tienda\atributosStore;

class CategoriaStoreController extends ApiResponseController
{
    public function allCategorias()
    {
        $categoria = CategoriaStore::orderBy('created_at', 'desc')->
                                     where('estado','=','activo')->
                                     get();

        foreach ($categoria as $key => $value1) {
            $subCategoria = SubCategoria::where('id_categoria','=',$value1->id_categoria)->get();
            $value1->children = $subCategoria;
            $value1->items = $subCategoria;
            $value1->depth = 0;
            $value1->url = $value1->slug;

            // foreach ($subCategoria as $key => $value) {
            //     $subsubCategoria = SubSubCategoria::where('id_subcategoria','=',$value->id_subcategoria)->get();

            //     foreach ($subsubCategoria as $key => $value2) {
            //         $value2->depth = 2;
            //         $value2->url = $value->slug.'/'.$value1->slug.'/'.$value2->slug;
            //     }
            //     $value->children = $subsubCategoria;
            //     $value->depth = 1;
            //     $value->url = $value->slug.'/'.$value1->slug;                
            // }
        }
        return $this->successResponse($categoria);
    }

    public function categoria(Request $request,$id)
    {
        $categoriaStore = CategoriaStore::find($id);
        if ($categoriaStore == null){
            return $this->errorResponse($categoriaStore);
        }
        return $this->successResponse($categoriaStore, $request->urlRequest);
    }

    public function subcategoria(Request $request,$id)
    {
        $subCategoria = SubCategoria::find($id);
        $codigo = CategoriaStore::where('id_categoria','=',$subCategoria['id_categoria'])->first();
        $subCategoria->codigo = $codigo->codigo;
        
        if ($subCategoria == null){
            return $this->errorResponse($subCategoria);
        }

        $atributos = [];
        
        foreach (json_decode($subCategoria['id_atributo']) as $key => $value) {
            Log::debug($value);  
            $atributo = atributosStore::where('id_atributo','=',$value)->first();
            array_push($atributos,$atributo);
        }

        $subCategoria['atributo'] = $atributos;
        
        return $this->successResponse($subCategoria, $request->urlRequest);
    }

    public function subsubcategoria(Request $request,$id)
    {
        $subSubCategoria = SubSubCategoria::find($id);
        $atributos = [];
        
        foreach (json_decode($subSubCategoria['id_atributo']) as $key => $value) {
            Log::debug($value);  
            $atributo = atributosStore::where('id_atributo','=',$value)->first();
            array_push($atributos,$atributo);
        }

        $subSubCategoria['atributo'] = $atributos;
        
        if ($subSubCategoria == null){
            return $this->errorResponse($subSubCategoria);
        }
        return $this->successResponse($subSubCategoria, $request->urlRequest);
    }
}
