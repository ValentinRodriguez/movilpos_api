<?php

namespace App\Http\Controllers\inventario;
use App\Http\Controllers\ApiResponseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Librerias\InvProductos;
use App\Librerias\Invtransaccdetallemodel;
use App\Librerias\coOrdenesDetalle;
use App\Librerias\ordenPedidoDetalle;
use App\Librerias\invTipos;
use App\Librerias\CategoriasModel;
use App\Librerias\BrandsModel;
use App\Librerias\Bodegas;
use App\Librerias\tipoProducto;
use App\Librerias\medidas;
use App\Librerias\Propiedadesprod;

use App\Librerias\iptb00002;

class InvProductosController extends ApiResponseController
{
    public function index(Request $request)
    {
        $productos = InvProductos::ConDetalles();
        return $this->successResponse($productos);
    }

    public function indexMovil(Request $request)
    {
        $productos = iptb00002::where('iptb00002.status_t','=',null)->
                                join('iptb00020','iptb00020.cod_n','=','iptb00002.cod_n')->
                                join('iptb00024','iptb00024.cod_tipo','=','iptb00002.cod_tipo')->
                                join('iptb00029','iptb00029.cod_grupo','=','iptb00002.cod_grupo')->
                                join('iptb00030','iptb00030.cod_sec','=','iptb00002.cod_sec')->
                                select('iptb00002.*','iptb00020.producto as condicion','iptb00024.descripcion as modelo',
                                       'iptb00029.descripcion as marca','iptb00030.descripcion as color')->
                                get();
        return $this->successResponse($productos, $request->urlRequest);
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

        $datos = array(
            "titulo"                =>$request->input("titulo"),          
            "chasis"                =>$request->input("chasis"),
            "motor"                 =>$request->input("motor"),
            "fabricacion"           =>$request->input("fabricacion"),
            "asientos"              =>$request->input("asientos"),
            "asientosAd"            =>$request->input("asientosAd"),
            "id_propiedad"          =>$request->input("id_propiedad"),
            "id_tipoinventario"     =>$request->input("id_tipoinventario"),
            "id_categoria"          =>$request->input("id_categoria"),
            "id_brand"              =>$request->input("id_brand"),
            "descripcion"           =>$request->input("descripcion"),
            "tipo_producto"         =>$request->input("tipo_producto"),
            "codigo"                =>$request->input("codigo"),
            "codigo_referencia"     =>$request->input("codigo_referencia"),
            "origen"                =>$request->input("origen"),
            "existenciaMaxima"      =>$request->input("existenciaMaxima"),
            "existenciaMinima"      =>$request->input("existenciaMinima"),
            "controlDeExistencias"  =>$request->input("controlDeExistencias"),
            // "referencia"            =>$request->input("referencia"),
            "id_bodega"             =>$request->input("id_bodega"),
            "controlItbis"          =>$request->input("controlItbis"),
            "precio_compra"         =>$request->input("precio_compra"),
            "precio_venta"          =>$request->input("precio_venta"),
            "costo"                 =>$request->input("costo"),
            "galeriaImagenes"       =>$request->input("galeriaImagenes"),
            "descuento"             =>$request->input("descuento"),
            "porcientodescuento"    =>$request->input("porcientodescuento"),
            "estado"                =>$request->input("estado"),
            "usuario_creador"       =>$request->input("usuario_creador")
        );
        
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
            // return response()->json($request->imagesSec);
            // if ($request->imagesSec !== 0) {
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
                // Storage::delete('public/'.$producto->imagen);
                $imagen = $request->file('galeriaImagenes');
                $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                $datos['galeriaImagenes'] = $request->file('galeriaImagenes')->storeAs('uploads', 'productos/'.$nombreImagen, 'public');
            }
            
            try {   
                InvProductos::create($datos);              
                return $this->successResponse($datos, $request->urlRequest);
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
                                join('paises','paises.id_pais','=','bodegas.id_pais')->
                                join('ciudades','ciudades.id_ciudad','=','bodegas.id_ciudad')->
                                select('bodegas.*','paises.descripcion as pais','ciudades.descripcion as ciudad')->
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
