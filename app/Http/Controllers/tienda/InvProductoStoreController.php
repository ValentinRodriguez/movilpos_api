<?php

namespace App\Http\Controllers\tienda;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Librerias\tienda\atributosStore;
use App\Librerias\inventario\invProductoStore;
use App\Http\Controllers\ApiResponseController;

class InvProductoStoreController extends ApiResponseController
{
    public function index(Request $request)
    {
        $productos = invProductoStore::all();
        return $this->successResponse($productos);
    }

    public function myProducts(Request $request)
    {
        $productos = invProductoStore::where([['usuario_creador','=',''],['tienda','=','']])->get();
        return $this->successResponse($productos);
    }

    public function atributo(Request $request)
    {
        $atributo = atributosStore::where('id_atributo','=',$request->get('id_atributo'));
        if ($atributo == null){
            return $this->errorResponse($atributo);
        }
        return $this->successResponse($atributo, $request->urlRequest);
    }

    public function store(Request $request)
    {        
        $maxid=0;
        $idsecuencia=0;
        $maxid = invProductoStore::get('id')->max();

        if ($maxid == null){
            $idsecuencia = 1;
        } else {
            $idsecuencia = $maxid->id;
            $idsecuencia = $idsecuencia + 1;
        }
        
        $datos = $request->all();  
        
        $datos["codigo"] = $datos["codigo"].$idsecuencia.'-'.time();
        // return response()->json($datos);
        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
             'min'      => 'El campo :attribute debe tener minimo 10 caracteres',
             'required_if' => 'El campo :attribute es requerido cuando :other es fisico'
        ];
        
        $validator = validator($datos, [
            "cantidadLim"   => '',
            "categoria"   => 'required',
            "descripcion"   => 'required',
            "documentosDigitales"   => '',
            "fechaLimDescarga"   => '',
            "fecha_rebaja"   => '',
            "limDescargas"   => '',
            "precio"   => 'required',
            "precio_rebajado"   => '',
            "stock"   => 'required',
            "tipo"   => 'required',
            "titulo"   => 'required'
        ],$messages);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else {      
            if (intval($request->imageLength) !== 0) {
                $galeriaImagenes = [];
                $imageLength =  $request->imageLength;

                for ($i=0; $i < $imageLength; $i++) {
                    $img[$i] = $request->file('galeriaImagenes'.$i);
                    $nombreImagen2 = time().'-'.uniqid().'.'.$img[$i]->getClientOriginalExtension();
                    $tempImage = $img[$i]->storeAs('uploads', 'tienda/imagenes/'.$nombreImagen2, 'public');
                    array_push($galeriaImagenes, $tempImage);
                }                    
                $datos['galeriaImagenes'] = json_encode($galeriaImagenes);
            }     
            $datos['atributos'] = json_decode($datos['atributos']);
            // return response()->json($datos);
            try {   
                DB::beginTransaction();                
                    invProductoStore::create($datos);              
                    return $this->successResponse($datos, $request->urlRequest);
                DB::commit();
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            } 
        }
    }

    // public function resize_image($file) {
    //     $resize_image = Image::make($make->getRealPath());
    //     $resize_image->resize(400, null, function($constraint) {
    //         $constraint->aspectRadio();
    //     });
    // }

    public function show(Request $request,$id)
    {
        $producto = invProductoStore::find($id);
        if ($producto == null){
            return $this->errorResponse($producto);
        }
        return $this->successResponse($producto, $request->urlRequest);
    }

    public function updateProducts(Request $request, $id)
    {
        $producto = invProductoStore::find($id);
        
        $datos = $request->all();

        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [            
            'id_categoria'        => 'required',
            'id_tipoinventario'   => 'required',
            'id_brand'            => 'required',
            'usuario_modificador' => 'required'
        ],$messages);        

        if ($validator->fails()) {
            $errors = $validator->errors();            
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{      

            // if (intval($request->imagesSec) !== 0) {

            //     $galeriaImagenes = [];
            //     $imagesSec =  $request->imagesSec;

            //     for ($i=0; $i < $imagesSec; $i++) {
            //         $img[$i] = $request->file('galeriaImagenes'.$i);

            //         $nombreImagen2 = uniqid().'.'.$img[$i]->getClientOriginalExtension();

            //         $tempImage = $img[$i]->storeAs('uploads', 'productos/'.$nombreImagen2, 'public');
            //         array_push($galeriaImagenes, $tempImage);
            //     }
            //     $datos['galeriaImagenes'] = json_encode($galeriaImagenes);
            // }
            
            
            if ($request->hasFile('galeriaImagenes')) {
                // return response()->json(1);
                // Storage::delete('public/'.$producto->imagen);
                $imagen = $request->file('galeriaImagenes');
                $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                $datos['galeriaImagenes'] = $request->file('galeriaImagenes')->storeAs('uploads', 'productos/'.$nombreImagen, 'public');
            }

            foreach ($datos as $key => $value) {
                if ($value == "null") {
                    $datos[$key] = null;
                }
            }           
            // return response()->json($datos);
            $producto->update($datos);
            return $this->successResponse($datos, $request->urlRequest);
        }
    }

    public function destroy(Request $request, $id)
    {
        $producto = invProductoStore::where('id','=',$id)->first();
        
        if ($producto == null){
            return $this->errorResponse(null,"Registro no Existe");
        }
        else{
            // $transaccion = Invtransaccdetallemodel::where([['codigo','=',$producto->codigo],['estado','=','activo']])->first();
            
            // if ($transaccion <> null){
            //     return $this->errorResponse("No puedes eliminar este producto, tiene transacciones en inventario");
            // }

            // $pedido = ordenPedidoDetalle::where([['codigo','=',$producto->codigo],['estado','=','activo']])->first();
            
            // if ($pedido <> null){
            //     return $this->errorResponse("No puedes eliminar este producto, tiene ordenes de pedido en proceso");
            // }

            // $compra = coOrdenesDetalle::where([['codigo','=',$producto->codigo],['estado','=','activo']])->first();

            // if ($compra <> null){
            //     return $this->errorResponse("No puedes eliminar este producto, tiene ordenes de compra en proceso");
            // }
            
            $producto->update(['estado' => 'ELIMINADO']);
            return $this->successResponse(null, $request->urlRequest,"Registro Eliminado");
        }
    }

    public function busquedaTitulo(Request $request) {

        $parametro = $request->get('producto');
        
        $productos = invProductoStore::where('inv_productos.estado','=','ACTIVO')->
                                   titulo($parametro)->        
                                   get();

        return $this->successResponse($productos, $request->urlRequest);
    }
  
}
