<?php

namespace App\Http\Controllers;

use App\Librerias\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends ApiResponseController
{
    
    public function index()
    {
        $empresa = Empresa::orderBy('created_at', 'desc')->where('estado','=','activo')->get();
        return $this->successResponse($empresa);
    }
    
    public function store(Request $request)
    {
       

        $datos = array(
            "nombre"              =>$request->input("nombre"),
            "telefono_empresa"    =>$request->input("telefono_empresa"),
            "email_empresa"       =>$request->input("email_empresa"),
            "rnc"                 =>$request->input("rnc"),
            "direccion"           =>$request->input("direccion"),
            "web"                 =>$request->input("web"),
            "contacto"            =>$request->input("contacto"),
            "telefono_contacto"   =>$request->input("telefono_contacto"),
            "moneda"              =>$request->input("moneda"),
            "logo"                =>$request->input("logo"),
            "id_pais"             =>$request->input("id_pais"),
            "id_ciudad"           =>$request->input("id_ciudad"),
            "empresa_verde"       =>$request->input("empresa_verde"),
            "tipo_cuadre"         =>$request->input("tipo_cuadre"),
            "valuacion_inv"       =>$request->input("valuacion_inv"),
            "usuario_creador"     =>$request->input("usuario_creador"),
            "estado"              =>$request->input("estado")
       );
       
       $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
       ];

       $validator = validator($datos, [
           "nombre"             => 'required|string',
           "telefono_empresa"   => 'required|string',
           "email_empresa"      => 'required|string',
           "rnc"                => 'required|string',
           "direccion"          => 'required|string',  
           "contacto"           => 'required|string',   
           "telefono_contacto"  => 'required|string',
           "empresa_verde"      => 'required',
           "tipo_cuadre"        => 'required',
           "valuacion_inv"      => 'required',
           "usuario_creador"    => 'required',
           "estado"             => 'required'
       ],$messages);

       if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
       }else{
           if ($request->hasFile('logo')) {
                // Storage::delete('public/'.$producto->imagen);
                $imagen = $request->file('logo');
                $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                $datos['logo'] = $request->file('logo')->storeAs('uploads', 'empresa/'.$nombreImagen, 'public');
            }
            try {                
                DB::beginTransaction();
                    $maxid=0;
                    $idsecuencia=0;
                
                    $maxid= Empresa::get('cod_cia')->max();
            
                    if ($maxid==null){
                        $idsecuencia=1;
                    }
                    else{
                        $idsecuencia=$maxid->cod_cia;
                        $idsecuencia=$idsecuencia+1;
                    }
                    $datos['cod_cia'] = $idsecuencia;
                    Empresa::create($datos);
                DB::commit();
                return $this->successResponse(1);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e);
            }            
            return $this->successResponse($datos);
       }
    }
    
    public function show($id)
    {
        $empresa = Empresa::find($id);
        if ($empresa == null){
            return $this->errorResponse($empresa);
        }
        return $this->successResponse($empresa);
    }
    
    public function update(Request $request){
        //
     }

    public function actualizar(Request $request, $id)
    {
        $empresa = Empresa::find($id);

        $datos = array(
            "nombre"              =>$request->input("nombre"),
            "telefono_empresa"    =>$request->input("telefono_empresa"),
            "email_empresa"       =>$request->input("email_empresa"),
            "rnc"                 =>$request->input("rnc"),
            "direccion"           =>$request->input("direccion"),
            "web"                 =>$request->input("web"),
            "contacto"            =>$request->input("contacto"),
            "telefono_contacto"   =>$request->input("telefono_contacto"),
            "moneda"              =>$request->input("moneda"),
            "logo"                =>$request->input("logo"),
            "empresa_verde"       =>$request->input("empresa_verde"),
            "tipo_cuadre"         =>$request->input("tipo_cuadre"),
            "valuacion_inv"       =>$request->input("valuacion_inv")
       );
       
       $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
       ];

       $validator = validator($datos, [
           "nombre"             => 'required|string',
           "telefono_empresa"   => 'required|string',
           "email_empresa"      => 'required|string',
           "rnc"                => 'required|string',
           "direccion"          => 'required|string',  
           "contacto"           => 'required|string',   
           "telefono_contacto"  => 'required|string',
           "empresa_verde"      => 'required',
           "tipo_cuadre"        => 'required',
           "valuacion_inv"      => 'required',
       ],$messages);

       if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
       }else{
           if ($request->hasFile('logo')) {
                // Storage::delete('public/'.$producto->imagen);
                $imagen = $request->file('logo');
                $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                $datos['logo'] = $request->file('logo')->storeAs('uploads', 'empresa/'.$nombreImagen, 'public');
            }

            $empresa->update($datos);
            return $this->successResponse($empresa, "Datos actualizads correctamente");
       }
    }
    
    public function destroy(Empresa $empresa)
    {
        //
    }

    // public function recibimientos()
    // {
    //     $puertos = dirrecepcion::orderBy('id_pais', 'asc')->
    //                             join('paises','paises.id_pais','=','dirrecepciones.id_pais')->
    //                             join('ciudades','ciudades.id_ciudad','=','dirrecepciones.id_ciudad')->
    //                             select('dirrecepciones.*','paises.descripcion as pais','ciudades.descripcion as ciudad')->
    //                             where('dirrecepciones.estado','=','ACTIVO')->
    //                             get();

    //     return $this->successResponse($puertos);
    // }

    public function busqueda(Request $request){
        $empresa = $request->get('empresa');
        
        $busqueda = Empresa::where([['empresas.nombre','=',$empresa],
                                    ['empresas.estado','=','ACTIVO']])->get(); 
                                                        
        return $this->successResponse($busqueda);
    }
    
}
