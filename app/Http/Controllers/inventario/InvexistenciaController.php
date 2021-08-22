<?php

namespace App\Http\Controllers\inventario;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Librerias\inventario\invexistencia;
use App\Http\Controllers\ApiResponseController;

class InvexistenciaController extends ApiResponseController
{
    public function index(Request $request)
    {
        $producto = invexistencia::leftjoin('invtransaccionesdetalle as b','a.codigo','=','b.codigo')->
                    join('categorias as c','c.id_categoria','=','a.id_categoria')->
                    join('brands as d','d.id_brand','=','a.id_brand')->
                    select('c.descripcion as descripcion categoria','a.descripcion as producto',
                        'd.descripcion as Marca','a.precio_venta as precio',
                    DB::raw('sum(b.cantidad) as cantidad')
                    )->
                    groupby('c.descripcion','a.descripcion','d.descripcion','a.precio_venta','a.created_at')->                       
                    orderBy('a.created_at', 'desc')->
                    get();
        
        return $this->successResponse($producto);
    }

    public function pdfcreator(){
        $producto1 = invexistencia::
        leftjoin('invtransaccionesdetalle as b','a.codigo','=','b.codigo')->
        join('categorias as c','c.id_categoria','=','a.id_categoria')->
        join('brands as d','d.id_brand','=','a.id_brand')->
        select('c.descripcion as descripcion categoria','a.descripcion as producto',
        'd.descripcion as Marca','a.precio_venta as precio',
        DB::raw('sum(b.cantidad) as existencia'))->
        groupby('c.descripcion','a.descripcion','d.descripcion','a.precio_venta','a.created_at')->                       
        orderBy('a.created_at', 'desc')->
        get();
      
       /* if ($prouducto == null){
            return $this->errorResponse($prouducto);
        }
        return $this->successResponse($prouducto); */
        // $pdf = PDF::loadView('producto', compact('producto1'));
    	// return $pdf->download('productos.pdf');
    }


    public function reportexistencia(Request $request){
        $id_categoria       =$request->get('id_categoria');
        $tipo               =$request->get('id_tipoinventario');
        $idbrand            =$request->get('id_brand');
        $codigo             =$request->get('codigo');
        $descripcion        =$request->get('descripcion');
        $fechainicial       =$request->get('fechainicial');
        $fechafinal         =$request->get('fechafinal');

        if($fechainicial == null){
            $fechainicial = 'DEBES ENVIAR LA FECHA INICIAL DEL PERIODO o no estas enviando <fechainicial> en el request';
            return $this->errorResponse($fechainicial);
        }

        
      /*  if($fechafinal == null){
            $fechafinal = 'DEBES ENVIAR LA FECHA FINAL DEL PERIODO o no estas enviando <fechafinal> en el request';
            return $this->errorResponse($fechafinal);
        }
        $fecha1 = strtotime($fechainicial);
        $fecha2 = strtotime($fechafinal);
        
        if($fecha2 < $fecha1){
            $fechafinal = 'FECHA FINAL NO PUEDE SER MENOR A LA INICIAL';
            return $this->errorResponse($fechafinal);
        }*/

        $fecha1 = strtotime($fechainicial);

        $producto = invexistencia::leftjoin('invtransaccionesdetalle as b','a.codigo','=','b.codigo')->
                                    join('invtransaccionesmaster as f','f.num_doc','=','b.num_doc')->
                                  //join('categorias as c','c.id_categoria','=','a.id_categoria')->
                                    join('categorias as c',function($join){
                                    $join->on('c.id_categoria','=','a.id_categoria');
                                })->
    
                                join('brands as d','d.id_brand','=','a.id_brand')->
                                join('invtipos_inventarios as e','e.id_tipoinventario','=','a.id_tipoinventario')->
                                where('f.fecha','<=',date('y-m-d',$fecha1))->
                                select('a.codigo as codigo','e.descripcion as tipo','a.descripcion as producto',
                                    'd.descripcion as marca','a.precio_venta as precio' ,'a.costo','a.imagenPrincipal as imagen_principal',
                                    'a.costo','c.descripcion as categoria',   
                                DB::raw('sum(b.cantidad) as existencia'))->
                                groupby('categoria','a.codigo','a.descripcion','d.descripcion','e.descripcion','a.imagenPrincipal','a.precio_venta','a.costo','a.created_at')->                       
                                orderBy('c.descripcion')->
                                
                                //  codigo($codigo)->
                                // categoria($id_categoria)->
                                // tipo($tipo)->
                                //brand($idbrand)->
                                descripcion($descripcion)->
                                get();                       
                        
                                // $pdf = PDF::loadView('producto', compact('producto'));
                                // return $pdf->stream('existencia.pdf');
                                
                                // return $this->successResponse($producto, $request->urlRequest);

    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show(invexistencia $invexistencia)
    {
      
    }

    public function update(Request $request, invexistencia $invexistencia)
    {
        //
    }

    public function destroy(invexistencia $invexistencia)
    {
        //
    }
}
