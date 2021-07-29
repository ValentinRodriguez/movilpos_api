<?php

namespace App\Http\Controllers\tienda;
use App\Http\Controllers\ApiResponseController;
use App\Librerias\CategoriaStore;
use App\Librerias\SubCategoria;
use App\Librerias\SubSubCategoria;
use Illuminate\Http\Request;

class CategoriaStoreController extends ApiResponseController
{
    public function index()
    {
        $categoria = CategoriaStore::orderBy('created_at', 'desc')->
        // selected('categoria_stores.*',)->
        where('estado','=','ACTIVO')->
        get();

        // $categoria = CategoriasModel::addSelect(['descripcion_sub' => SubCategoria::select('descripcion')
        //     ->whereColumn('id_subcategoria', 'categorias.id_categoria')
        //     //->limit(1)
        // ])->get();

        foreach ($categoria as $key => $value1) {
            $subCategoria = SubCategoria::all()->where('id_categoria','=',$value1->id_categoria);
            $value1->children = $subCategoria;
            $value1->depth = 0;
            $value1->path = $value1->slug;

            foreach ($subCategoria as $key => $value) {
                $subsubCategoria = SubSubCategoria::all()->where('id_subcategoria','=',$value->id_subcategoria);

                foreach ($subsubCategoria as $key => $value2) {
                    $value2->depth = 2;
                    $value2->path = $value->slug.'/'.$value1->slug.'/'.$value2->slug;
                }
                $value->children = $subsubCategoria;
                $value->depth = 1;
                $value->path = $value->slug.'/'.$value1->slug;
                
            }
        }
        return $this->successResponse($categoria);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoriaStore  $categoriaStore
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaStore $categoriaStore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoriaStore  $categoriaStore
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriaStore $categoriaStore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoriaStore  $categoriaStore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriaStore $categoriaStore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoriaStore  $categoriaStore
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriaStore $categoriaStore)
    {
        //
    }
}
