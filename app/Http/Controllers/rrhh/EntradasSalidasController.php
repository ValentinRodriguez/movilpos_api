<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ApiResponseController;

use App\librerias\EntradasSalidas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntradasSalidasController extends ApiResponseController
{
    public function index(Request $request)
    {
        //
    }


    public function reportcost(Request $request){
        //return response()->json($request);

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

        
        if($fechafinal == null){
            $fechafinal = 'DEBES ENVIAR LA FECHA FINAL DEL PERIODO o no estas enviando <fechafinal> en el request';
            return $this->errorResponse($fechafinal);
        }
        $fecha1 = strtotime($fechainicial);
        $fecha2 = strtotime($fechafinal);
        
        if($fecha2 < $fecha1){
            $fechafinal = 'FECHA FINAL NO PUEDE SER MENOR A LA INICIAL';
            return $this->errorResponse($fechafinal);
        }
        $existencia= EntradasSalidas::select('a.codigo as codigo','c.descripcion as categoria',
                                           'a.descripcion as producto',
                                          'd.descripcion as brand' ,'a.costo','a.imagenPrincipal',
                                          DB::raw('sum(b.cantidad) as existencia,0 as entrada,0 as salida'))->
                                leftjoin('invtransaccionesdetalle as b','b.codigo','=','a.codigo')->
                                leftjoin('invtransaccionesmaster as f','f.num_doc','=','b.num_doc')->
                                
                                join('categorias as c','c.id_categoria','=','a.id_categoria')->
                                join('brands as d','d.id_brand','=','a.id_brand')->
                          
                                where('f.fecha','<=',date('y-m-d',$fecha2))->
                            
                                codigo($codigo)->
                                categoria($id_categoria)->
                                brand($idbrand)->
                                descripcion($descripcion)->
                                groupby('a.codigo','c.descripcion','a.descripcion','d.descripcion',
                                        'a.imagenPrincipal','a.costo');


        $entrada= EntradasSalidas::select('a.codigo as codigo','c.descripcion as categoria',
                                           'a.descripcion as producto',
                                          'd.descripcion as brand' ,'a.costo','a.imagenPrincipal',
                                          DB::raw('0 as existencia,sum(b.cantidad) as entrada,0 as salida'))->
                                leftjoin('invtransaccionesdetalle as b','b.codigo','=','a.codigo')->
                                leftjoin('invtransaccionesmaster as f','f.num_doc','=','b.num_doc')->
                                join('invtiposmovimientos as g','g.id_tipomov','=','f.id_tipomov')->
                                join('categorias as c','c.id_categoria','=','a.id_categoria')->
                                join('brands as d','d.id_brand','=','a.id_brand')->
                          
                                where('g.origen','=','debito')->
                                wherebetween('f.fecha',[date('y-m-d',$fecha1),date('y-m-d',$fecha2)])->
                                codigo($codigo)->
                                categoria($id_categoria)->
                                tipo($tipo)->
                                brand($idbrand)->
                                descripcion($descripcion)->
                                
                                groupby('a.codigo','c.descripcion','a.descripcion','d.descripcion',
                                        'a.imagenPrincipal','a.costo');

         $salida= EntradasSalidas::where('e.origen','=','credito')->
                                   wherebetween('c.fecha',[date('y-m-d',$fecha1),date('y-m-d',$fecha2)])->
                                   SELECT('a.codigo as codigo','d.descripcion as categoria',
                                            'a.descripcion as producto',
                                            'f.descripcion as brand' ,'a.costo','a.imagenPrincipal',
                                        DB::raw('0 as existencia,0 as entrada,sum(b.cantidad) as salidas'))->
                                   leftjoin('invtransaccionesdetalle as b','a.codigo','=','b.codigo')->
                                   leftjoin('invtransaccionesmaster as c','c.num_doc','=','b.num_doc')->
                                   join('invtiposmovimientos as e','e.id_tipomov','=','c.id_tipomov')->
                                   join('categorias as d','d.id_categoria','=','a.id_categoria')->
                                   join('brands as f','f.id_brand','=','a.id_brand')->
                                   
                                   codigo($codigo)->
                                   categoria($id_categoria)->
                                   tipo($tipo)->
                                   brand($idbrand)->
                                   descripcion($descripcion)->
                                   union($entrada)->
                                   union($existencia)->
                               
                                   groupby('a.codigo','d.descripcion','a.descripcion','f.descripcion',
                                           'a.imagenPrincipal','a.costo')->
                                //    toSql();
                                  get();
                                   return $this->successResponse($salida, $request->urlRequest);
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
     * @param  \App\EntradasSalidas  $entradasSalidas
     * @return \Illuminate\Http\Response
     */
    public function show(EntradasSalidas $entradasSalidas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EntradasSalidas  $entradasSalidas
     * @return \Illuminate\Http\Response
     */
    public function edit(EntradasSalidas $entradasSalidas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EntradasSalidas  $entradasSalidas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntradasSalidas $entradasSalidas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EntradasSalidas  $entradasSalidas
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntradasSalidas $entradasSalidas)
    {
        //
    }
}
