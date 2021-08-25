<?php

namespace App\Http\Controllers\inventario;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Librerias\inventario\invcatalogo;
use App\Http\Controllers\ApiResponseController;

class InvcatalogoController extends ApiResponseController
{
    public function index(Request $request)
    {        
        $prouducto = DB::table('invtransaccionesdetalle as b')->
                        join('inv_productos as a','b.codigo','=','a.codigo')->
                        join('categorias as c','c.id_categoria','=','a.id_categoria')->
                        join('brands as d','d.id_brand','=','a.id_brand')->
                        select('c.descripcion as descripcion categoria','a.descripcion as descripcion producto',
                               'd.descripcion as Marca','a.precio_venta as precio',
                               DB::raw('sum(b.cantidad) as cantidad'),
                               DB::raw('sum(a.precio_venta * cantidad) as total'))->
                        groupby('c.descripcion','a.descripcion','d.descripcion','a.precio_venta','a.created_at')->                       
                        orderBy('a.created_at', 'desc')->
                        get();
      
        if ($prouducto == null){
            return $this->errorResponse($prouducto);
        }
        return $this->successResponse($prouducto, $request->urlRequest);                      
    }
                 
    public function store(Request $request)
    {
        //
    }
    
    public function show(invcatalogo $invcatalogo)
    {
        //
    }
        
    public function update(Request $request, invcatalogo $invcatalogo)
    {
        //
    }

    public function destroy(invcatalogo $invcatalogo)
    {
        //
    }

    public function reportinv(Request $request){

        $id_categoria       =$request->get('id_categoria');
        $tipo               =$request->get('id_tipoinventario');
        $idbrand            =$request->get('id_brand');
        $codigo             =$request->get('codigo');
        $descripcion        =$request->get('descripcion');

        $producto = invcatalogo::leftjoin('invtransaccionesdetalle as b','a.codigo','=','b.codigo')->
                                join('categorias as c','c.id_categoria','=','a.id_categoria')->
                                join('brands as d','d.id_brand','=','a.id_brand')->
                                join('invtipos_inventarios as e','e.id_tipoinventario','=','a.id_tipoinventario')->
                                select('a.codigo as codigo','c.descripcion as categoria','e.descripcion as tipo','a.descripcion as producto',
                                      'd.descripcion as marca','a.precio_venta as precio' ,'a.costo',
                                DB::raw('sum(b.cantidad) as existencia'),db::raw('sum(a.precio_venta * cantidad)  as valor_ventas '),
                                db::raw('sum(a.costo * cantidad)  as valor_costo '))->
                                groupby('a.codigo','c.descripcion','a.descripcion','d.descripcion','e.descripcion','a.precio_venta','a.costo','a.created_at')->                       
                                orderBy('c.descripcion')->
                                
                                codigo($codigo)->
                                categoria($id_categoria)->
                                tipo($tipo)->
                                brand($idbrand)->
                                descripcion($descripcion)->
                                get();
   
        return $this->successResponse($producto, $request->urlRequest);
    }

}
