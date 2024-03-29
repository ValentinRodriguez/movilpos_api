<?php

namespace App\Http\Controllers\tienda;
use Illuminate\Http\Request;
use App\Rules\stockRequeridoSi;
use Illuminate\Support\Facades\DB;
use App\Librerias\tienda\atributosStore;
use App\Librerias\tienda\invProductoStore;
use App\Http\Controllers\ApiResponseController;

class InvProductoStoreController extends ApiResponseController
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(Request $request)
    {
        // return response()->json($request->all()); 
        // ['usuario_creador','=',$request->usuario_creador],
        $productos = invProductoStore::where([['tienda','=',$request->empresa],
                                              ['estado','=','activo']])->get();
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
             'required_if' => 'El campo :attribute es requerido cuando :other es basico'
        ];
        
        $validator = validator($datos, [
            "cantidadLim"   => '',
            "tipo"   => 'required',
            "categoria"   => 'required',
            "descripcion"   => 'required',
            "tienda"   => 'required',
            "documentosDigitales"   => '',
            "fechaLimDescarga"   => '',
            "fecha_rebaja"   => '',
            "limDescargas"   => '',
            "precio"   => 'required_if:tipo,basico| required_if:tipo,digital',
            "precio_rebajado"   => '',
            "stock"   => 'required_unless:categoria,1',
            "titulo"   => 'required'
        ],$messages);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else {      
            
            try {   
                DB::beginTransaction();                   
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
                    $producto = invProductoStore::create($datos); 
                    return $this->successResponse($producto, $request->urlRequest);
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

    public function updateProduct(Request $request, $id)
    {
        $producto = invProductoStore::find($id);
        
        $datos = $request->all();
        
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
            'min'      => 'El campo :attribute debe tener minimo 10 caracteres',
            'required_if' => 'El campo :attribute es requerido cuando :other es basico'
       ];
       
       $validator = validator($datos, [
           "cantidadLim"   => '',
           "tipo"   => 'required',
           "categoria"   => 'required',
           "descripcion"   => 'required',    
           "tienda" => 'required',
           "precio"   => 'required_if:tipo,basico| required_if:tipo,digital',         
           "stock"   => 'required_unless:categoria,1',
           "titulo"   => 'required'
       ],$messages);     

        if ($validator->fails()) {
            $errors = $validator->errors();            
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{    
            if (intval($request->imageLength) !== 0) {
                $galeriaImagenes = [];
                $imageLength =  $request->imageLength;
                
                for ($i=0; $i < $imageLength; $i++) {
                    $img[$i] = $request->file('galeriaImagenes'.$i);
                    $nombreImagen2 = time().'-'.uniqid().'.'.$img[$i]->getClientOriginalExtension().'jpg';
                    // return response()->json($img[$i]->getClientOriginalExtension()); 
                           
                    $tempImage = $img[$i]->storeAs('uploads', 'tienda/imagenes/'.$nombreImagen2, 'public');
                    array_push($galeriaImagenes, $tempImage);
                }                    
                $datos['galeriaImagenes'] = json_encode($galeriaImagenes);
            }           
            // return response()->json($datos);
            $producto->update($datos);
            return $this->successResponse($datos, $request->urlRequest);
        }
    }

    public function destroy(Request $request, $id)
    {
        $producto = invProductoStore::where('id','=',$id)->first();
        // return response()->json($producto);
        if ($producto == null){
            return $this->errorResponse(null,"Registro no Existe");
        }
        else{            
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
