<?php

namespace App\Http\Controllers\inventario;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Librerias\globales\medidas;
use App\Librerias\inventario\Bodegas;
use App\Librerias\inventario\invTipos;
use Illuminate\Support\Facades\Storage;
use App\Librerias\inventario\BrandsModel;
use App\Librerias\inventario\InvProductos;
use App\Librerias\inventario\tipoProducto;
use App\Librerias\compras\coOrdenesDetalle;
use App\Librerias\ventas\ordenPedidoDetalle;
use App\Librerias\inventario\CategoriasModel;
use App\Librerias\inventario\Propiedadesprod;

use App\Http\Controllers\ApiResponseController;
use App\Librerias\inventario\Invtransaccdetallemodel;

class InvProductosController extends ApiResponseController
{
    public function index(Request $request)
    {
        $productos = InvProductos::ConDetalles();
        return $this->successResponse($productos);
    }

    public function indexSinExistencia(Request $request)
    {
        $productos = InvProductos::ConDetallesExiste();
        return $this->successResponse($productos, $request->urlRequest);
    }

    public function store(Request $request)
    {        
        $maxid=0;
        $idsecuencia=0;
        $maxid = InvProductos::get('id')->max();

        if ($maxid == null){
            $idsecuencia = 1;
        } else {
            $idsecuencia = $maxid->id;
            $idsecuencia = $idsecuencia + 1;
        }

        $datos = $request->all();
        
        // $datos['id_brand'] = $datos['id_brand']->id_brand;
        // return response()->json($datos);

        // SI EL EL TIPO DE PRODUCTO ES DIGITAL
        if ($datos["tipo_producto"] == 2) {
            $datos["id_brand"] = 2;
            $datos["id_categoria"] = 2;
            $datos["id_propiedad"] = 2;
        }

        // SI EL EL TIPO DE PRODUCTO ES SERVICIO
        if ($datos["tipo_producto"] == 3) {
            $datos["id_brand"] = 1;
            $datos["id_categoria"] = 1;
            $datos["id_propiedad"] = 1;
        }

        $codigo =  $datos["tipo_producto"].$datos["id_categoria"].$datos["id_brand"].$idsecuencia;
        $datos["codigo"] = $codigo;
        
        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
             'min'      => 'El campo :attribute debe tener minimo 10 caracteres',
             'required_if' => 'El campo :attribute es requerido cuando :other es fisico'
        ];
        
        $validator = validator($datos, [
            "titulo"                => 'required|string',
            "chasis"                => 'required_if:tipo_producto,1',
            "asientos"              => 'required_if:tipo_producto,1',
            "id_propiedad"          => 'required_if:tipo_producto,1',
            "id_tipoinventario"     => 'required_if:tipo_producto,1',
            "id_categoria"          => 'required',
            "id_brand"              => 'required',
            "descripcion"           => 'required|string',
            "tipo_producto"         => 'required|string',
            "codigo"                => 'required',
            "descuento"             => 'required',
            "origen"                => 'required_if:tipo_producto,1',
            'existenciaMinima'      => 'required_if:tipo_producto,1',
            "controlDeExistencias"  => 'required_if:tipo_producto,1',
            "referencia"            => 'string',
            "id_bodega"             => 'required_if:tipo_producto,1',
            "controlItbis"          => 'required|string',
            "precio_compra"         => 'required_if:tipo_producto,1',
            "precio_venta"          => 'required_if:tipo_producto,1|numeric',
            "costo"                 => 'required_if:tipo_producto,1',
            "estado"                => 'required|string',
            "usuario_creador"       => 'required|string'
        ],$messages);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else {                
            if ($datos['tipo_producto'] != 1) {
                $datos['chasis'] = 'no requerido';
                $datos['motor'] = 'no requerido';
                $datos['fabricacion'] = 'XXXXX';
                $datos['asientos'] = 0;
                $datos['propiedad'] = 'no requerido';
                $datos['id_categoria'] = 1;
                $datos['existenciaMinima'] = 0;
                $datos['existenciaMaxima'] = 0;
                $datos['id_bodega'] = 1;
            }

                if (intval($request->imageLength) !== 0) {
                    $galeriaImagenes = [];
                    $imageLength =  $request->imageLength;

                    for ($i=0; $i < $imageLength; $i++) {
                        $img[$i] = $request->file('galeriaImagenes'.$i);
                        $nombreImagen2 = uniqid().'.'.$img[$i]->getClientOriginalExtension();
                        // return response()->json($img[$i]->getClientOriginalName());
                        $tempImage = $img[$i]->storeAs('uploads', 'productos/'.$nombreImagen2, 'public');
                        array_push($galeriaImagenes, $tempImage);
                    }                    
                    $datos['galeriaImagenes'] = json_encode($galeriaImagenes);
                }
                        
            try {   
                DB::beginTransaction();
                    InvProductos::create($datos);              
                    return $this->successResponse($datos, $request->urlRequest);                
                DB::commit();
            } catch (\Exception $e ){
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
        $producto = InvProductos::find($id);
        if ($producto == null){
            return $this->errorResponse($producto);
        }
        return $this->successResponse($producto, $request->urlRequest);
    }

    public function updateProducts(Request $request, $id)
    {
        $producto = InvProductos::find($id);
        
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
        $producto = InvProductos::where('id','=',$id)->first();
        
        if ($producto == null){
            return $this->errorResponse(null,"Registro no Existe");
        }
        else{
            $transaccion = Invtransaccdetallemodel::where([['codigo','=',$producto->codigo],['estado','=','activo']])->first();
            
            if ($transaccion <> null){
                return $this->errorResponse("No puedes eliminar este producto, tiene transacciones en inventario");
            }

            $pedido = ordenPedidoDetalle::where([['codigo','=',$producto->codigo],['estado','=','activo']])->first();
            
            if ($pedido <> null){
                return $this->errorResponse("No puedes eliminar este producto, tiene ordenes de pedido en proceso");
            }

            $compra = coOrdenesDetalle::where([['codigo','=',$producto->codigo],['estado','=','activo']])->first();

            if ($compra <> null){
                return $this->errorResponse("No puedes eliminar este producto, tiene ordenes de compra en proceso");
            }
            
            $producto->update(['estado' => 'ELIMINADO']);
            return $this->successResponse(null, $request->urlRequest,"Registro Eliminado");
        }
    }

    public function busquedaTitulo(Request $request) {

        $parametro = $request->get('producto');
        
        $productos = InvProductos::where('inv_productos.estado','=','ACTIVO')->
                                   titulo($parametro)->        
                                   get();

        return $this->successResponse($productos, $request->urlRequest);
    }

    public function autoLlenado(Request $request)
    {
        $respuesta = array();
        try {                 
            
            $tipos = invTipos::orderBy('created_at', 'desc')->
                               where('invtipos_inventarios.estado','=','ACTIVO')->
                               get();
    
            $categoria = CategoriasModel::orderBy('created_at', 'desc')->
                                          where('categorias.estado','=','ACTIVO')->
                                          get();
    
            $brand = BrandsModel::orderBy('id_brand', 'asc')->
                                  where('brands.estado','=','ACTIVO')->
                                  get();
    
            $bodegas = Bodegas::orderBy('id_bodega', 'asc')->
                                join('mov_globales.paises','mov_globales.paises.id_pais','=','bodegas.id_pais')->
                                join('mov_globales.ciudades','mov_globales.ciudades.id_ciudad','=','bodegas.id_ciudad')->
                                select('bodegas.*','mov_globales.paises.descripcion as pais','mov_globales.ciudades.descripcion as ciudad')->
                                where('bodegas.estado','=','ACTIVO')->
                                get();
    
            $medidas = medidas::orderBy('created_at', 'desc')->
                                where('medidas.estado','=','ACTIVO')->
                                get();

            $tipoProducto = tipoProducto::orderBy('created_at', 'desc')->
                                          where('tipo_productos.estado','=','ACTIVO')->
                                          get();
    
            $propiedades = Propiedadesprod::orderBy('created_at', 'desc')->
                                        where('propiedades.estado','=','ACTIVO')->
                                        get();
                                        
            $_tipos = array("label" => 'tipo-inventario', "data" => $tipos, "icono" => 'fas fa-dolly-flatbed');
            $_categoria = array("label" =>'modelos', "data" => $categoria, "icono" => 'fas fa-sitemap');
            $_brand = array("label" =>'marcas', "data" => $brand, "icono" => 'far fa-copyright');
            $_bodegas = array("label" =>'bodegas', "data" => $bodegas, "icono" => 'fas fa-warehouse');
            $_medidas = array("label" =>'medidas', "data" => $medidas, "icono" => 'pi pi-calendar');
            $_tipoProducto = array("label" =>'tipo-producto', "data" => $tipoProducto, "icono" => 'fas fa-box');
            $_propiedades = array("label" =>'color', "data" => $propiedades, "icono" => 'fas fa-box');

            array_push($respuesta,$_tipos);
            array_push($respuesta,$_brand);
            array_push($respuesta,$_categoria);
            array_push($respuesta,$_propiedades);
            array_push($respuesta,$_bodegas);
            array_push($respuesta,$_medidas);
            array_push($respuesta,$_tipoProducto);

            return $this->successResponse($respuesta, $request->urlRequest);
        } catch (\Exception $e ){
            return $this->errorResponse($e->getMessage(), $request->urlRequest);
        }
    }

    public function tiposProductos(Request $request)
    {
        $tipos = tipoProducto::orderBy('titulo','asc')->
                               where('estado','=','ACTIVO')->
                               get();

        return $this->successResponse($tipos, $request->urlRequest);
    }

    public function medidasProductos(Request $request)
    {
        $tipos = medidas::orderBy('titulo','asc')->
                          where('estado','=','ACTIVO')->
                          get();

        return $this->successResponse($tipos, $request->urlRequest);
    }

    public function propiedadesProductos(Request $request)
    {
        $propiedades = Propiedadesprod::orderBy('titulo','asc')->
                                    where('estado','=','ACTIVO')->
                                    get();

        return $this->successResponse($propiedades);
    }
}
