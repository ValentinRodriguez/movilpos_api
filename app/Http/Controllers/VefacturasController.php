<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Librerias\vefacturasmaster;
use App\Librerias\vefacturadetalle;
use Illuminate\Http\Request;
use App\Librerias\secuenciaCobros;

class VefacturasController extends ApiResponseController
{
    public function index()
    {
        $facturas = vefacturasmaster::join('veclientes',function($join){
                                        $join->on('vefacturasmaster.tipo_cliente','=','veclientes.tipo_cliente')->
                                        oron('vefacturasmaster.sec_cliente','=','veclientes.sec_cliente');
                                    })->select('vefacturasmaster.*','veclientes.nombre')
                                      ->where('vefacturasmaster.estado','=','ACTIVO')
                                      ->get();
        if ($facturas == null){
            return $this->errorResponse('NO EXISTEN FACTURAS');
        }
        else{
            return $this->successResponse($facturas);
        }
    }

    public function store(Request $request)
    {
        try{
            DB::beginTransaction();  
                $productos = $request->get('productos');
                $datosm    = $request->all();            
                
                $factura = secuenciaCobros::where('documento','=','FC')->get();
                return response()->json($productos);
                if(count($factura) == 0){                                      
                    $data = ['documento' => 'FC',
                             'secuencia' => 1,
                             'usuario_creador' => $datosm['usuario_creador']
                    ];
                    secuenciaCobros::create($data);
                    $factura = 1;      
                    
                }
                else{
                    $factura = $factura[0]['secuencia']+ 1;
                    secuenciaCobros::where('documento','=','FC')->update(['secuencia'=>$factura]);                                     
                }
                
                $datosm['factura'] = $factura;
                
                $messages = [
                    'required' => 'El campo :attribute es requerido.',
                    'unique'   => 'El campo :attribute debe ser unico',
                    'numeric'  => 'El campo :attribute debe ser numerico',
                    'required_if' => 'El campo :attribute no puede estar en blanco'
                ];
            
                $validator = validator($datosm, [  
                    'fecha_factura' => 'required',
                    'neto'          => 'required',
                    'num_emp'       => 'required',
                    'sub_total'     => 'required',
                $messages]);       
                
                if ($validator->fails()) {            
                    $errors = $validator->errors();
                    return $this->errorResponseParams($errors->all());
                }else{
                    $transaccion_guardada = vefacturasmaster::create($datosm);
                                        
                    if (count($productos) !== 0) {
                        $datosd = null;
                        for ($i=0; $i < count($productos); $i++) {                            
                            
                            $datosd = array('factura'	 => $datosm['factura'],
                                            'codigo'     => $productos[$i]['codigo'],	
                                            'titulo'     => $productos[$i]['titulo'],
                                            'porc_desc'	 => $productos[$i]['porc_desc'],
                                            'descuento'	 => $productos[$i]['monto_desc'],
                                            'porc_itbis' => $productos[$i]['porc_itbis'],
                                            'itbis'	     => $productos[$i]['monto_itbis'],
                                            'cantidad'	 => $productos[$i]['cantidad'],
                                            'cantidad1'	 => $productos[$i]['cantidad1'],
                                            'precio'     => $productos[$i]['precio_venta'],
                                            'costo'	     => $productos[$i]['costo'],
                                            'valor'      => $productos[$i]['valor'],
                                            'estado'     => $productos[$i]['estado']                               
                            );
                            //return response()->json($datosd);
                            $messages = [
                                'required' => 'El campo :attribute es requerido.',
                                'unique'   => 'El campo :attribute debe ser unico',
                                'numeric'  => 'El campo :attribute debe ser numerico',
                            ];
            
                            $validator = validator($datosd, [
                                'precio'    => 'required',
                                'factura'   => 'required',
                                'codigo'    => 'required',
                                'estado'    => 'required',
                                'cantidad1' => 'required'
                            ],$messages);
            
                            if ($validator->fails()) {                                
                                $errors = $validator->errors();
                                return $this->errorResponseParams($errors->all());
                            }                            
                            vefacturadetalle::create($datosd);                            
                        }      
                                
                    }else{
                        return $this->errorResponse('Debe agregar productos a la factura');
                    }
                }
            
            DB::commit();
            return $this->successResponse($datosm);
        }
        catch (\Exception $e ){
            return $this->errorResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        $factura = vefacturasmaster::find($id);
        if ($factura == null){
            return $this->errorResponse($factura);
        }
        return $this->successResponse($factura);
    }

    public function destroy($vefacturas)
    {
        //
    }

    public function buscaFactura($vefactura)
    {
        $data = array();
        $facturas = vefacturasmaster::where([['vefacturasmaster.factura','=',$vefactura],['vefacturasmaster.estado','=','activo']])->
                                      leftjoin('veclientes',[['veclientes.tipo_cliente','=','vefacturasmaster.tipo_cliente'],
                                                             ['veclientes.sec_cliente','=','vefacturasmaster.sec_cliente']])->
                                      select('vefacturasmaster.*','veclientes.email','veclientes.num_rnc')->
                                      get();

        $facturasDetalle = vefacturadetalle::where([['vefacturasdetalle.factura','=',$vefactura],['vefacturasdetalle.estado','=','activo']])->
                                             join('inv_productos', 'vefacturasdetalle.codigo','=','inv_productos.codigo')->
                                             join('categorias','categorias.id_categoria','=','inv_productos.id_categoria')->
                                             join('brands','brands.id_brand','=','inv_productos.id_brand')->
                                             join('invtipos_inventarios','invtipos_inventarios.id_tipoinventario','=','inv_productos.id_tipoinventario')->
                                             join('bodegas','bodegas.id_bodega','=','inv_productos.id_bodega')->
                                             select('vefacturasdetalle.*',
                                                    'inv_productos.titulo','inv_productos.descripcion','inv_productos.codigo','inv_productos.codigo_referencia',
                                                    'inv_productos.origen','inv_productos.existenciaMinima','inv_productos.existenciaMaxima','inv_productos.ultimaFechaCompra',
                                                    'inv_productos.precio_compra','inv_productos.precio_venta','inv_productos.costo','inv_productos.fechaInicioDescuento',
                                                    'inv_productos.fechaFinDescuento','inv_productos.porcientodescuento','inv_productos.ventas','inv_productos.devoluciones',
                                                    'inv_productos.galeriaImagenes',
                                                    'categorias.descripcion as categoria',
                                                    'brands.descripcion as marca',
                                                    'invtipos_inventarios.descripcion as tipoinventario',
                                                    'bodegas.descripcion as almacen')->
                                             get();


        if ($facturas == null){
            return $this->errorResponse('Esta factura no existe');
        }
        else{
            foreach ($facturas as $key => $value) {
                $value->productos = $facturasDetalle;
                array_push($data, $value);
            }
            return $this->successResponse($data[0]);
        }
    }
}
