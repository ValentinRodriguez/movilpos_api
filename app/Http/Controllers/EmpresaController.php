<?php

namespace App\Http\Controllers;

use App\Librerias\Empresa;
use App\Librerias\sucursales;
use App\Librerias\permisosEmpresa;
use App\Librerias\permisosEmpresaValor;
use App\Librerias\Modulos;
use App\Librerias\Menu;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends ApiResponseController
{
    
    public function index(Request $request)
    {
        $empresa = Empresa::orderBy('created_at', 'desc')->where('estado','=','activo')->get();


        foreach ($empresa as $key => $value) {
            $sucursales = sucursales::join('paises','paises.id_pais','=','sucursales.id_pais')->
            join('ciudades','ciudades.id_ciudad','=','sucursales.id_ciudad')->
            join('regiones','regiones.id_region','=','sucursales.id_region')->
            join('municipios','municipios.id_municipio','=','sucursales.id_municipio')->
            join('provincias','provincias.id_provincia','=','sucursales.id_provincia')->
            leftjoin('sectores','sectores.id_sector','=','sucursales.id_sector')->
            select('sucursales.*',
                   'paises.descripcion as pais',
                   'ciudades.descripcion as ciudad',
                   'municipios.descripcion as municipio',
                   'regiones.descripcion as region',
                   'sectores.descripcion as sector',
                   'provincias.descripcion as provincia')->        
            orderBy('created_at', 'desc')->
            where([['sucursales.estado','=','ACTIVO'],['sucursales.cod_cia','=',$value->cod_cia]])->
            get();
            
            $value->sucursales = $sucursales;
        }
        return $this->successResponse($empresa, $request->urlRequest);
    }
    
    public function store(Request $request)
    {
        $datos = array(
            "nombre"              =>$request->input("nombre"),
            "telefono_empresa"    =>$request->input("telefono_empresa"),
            "email_empresa"       =>$request->input("email_empresa"),
            "rnc"                 =>$request->input("rnc"),
            "calle"               =>$request->input("calle"),
            "web"                 =>$request->input("web"),
            "contacto"            =>$request->input("contacto"),
            "telefono_contacto"   =>$request->input("telefono_contacto"),
            "moneda"              =>$request->input("moneda"),
            "logo"                =>$request->input("logo"),
            "id_pais"             =>$request->input("id_pais"),
            "id_ciudad"           =>$request->input("id_ciudad"),
            "id_provincia"        =>$request->input("id_provincia"),
            "id_region"           =>$request->input("id_region"),
            "id_municipio"        =>$request->input("id_municipio"),
            "id_sector"           =>$request->input("id_sector"),
            "empresa_verde"       =>$request->input("empresa_verde"),
            "tipo_cuadre"         =>$request->input("tipo_cuadre"),
            "valuacion_inv"       =>$request->input("valuacion_inv"),
            "usuario_creador"     =>$request->input("usuario_creador"),
            "estado"              =>$request->input("estado")
       );
    //    return response()->json($datos);
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
           "calle"              => 'required|string',  
           "contacto"           => 'required|string',   
           "telefono_contacto"  => 'required|string',
           "id_pais"            => 'required',
           "id_region"          => 'required',
           "id_municipio"       => 'required',
           "id_provincia"       => 'required',
           "empresa_verde"      => 'required',
           "tipo_cuadre"        => 'required',
           "valuacion_inv"      => 'required',
           "usuario_creador"    => 'required',
           "estado"             => 'required'
       ],$messages);

       if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
       }else{
           if ($request->hasFile('logo')) {
                // Storage::delete('public/'.$producto->imagen);
                $imagen = $request->file('logo');
                $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                $datos['logo'] = $request->file('logo')->storeAs('uploads', 'empresa/'.$nombreImagen, 'public');
            }
            try {                
                $datos['logo'] = '';
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
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }            
            return $this->successResponse($datos, $request->urlRequest);
       }
    }
    
    public function show(Request $request,$id)
    {
        $empresa = Empresa::find($id);
        if ($empresa == null){
            return $this->errorResponse($empresa);
        }
        return $this->successResponse($empresa, $request->urlRequest);
    }
    
    public function update(Request $request){
    
    }

    public function actualizar(Request $request, $id)
    {
        $empresa = Empresa::find($id);

        $datos = array(
            "nombre"              =>$request->input("nombre"),
            "telefono_empresa"    =>$request->input("telefono_empresa"),
            "email_empresa"       =>$request->input("email_empresa"),
            "rnc"                 =>$request->input("rnc"),
            "calle"               =>$request->input("calle"),
            "web"                 =>$request->input("web"),
            "id_pais"             =>$request->input("id_pais"),
            "id_ciudad"           =>$request->input("id_ciudad"),
            "id_region"           =>$request->input("id_region"),
            "id_municipio"        =>$request->input("id_municipio"),
            "id_provincia"        =>$request->input("id_provincia"),
            "id_sector"           =>$request->input("id_sector"),
            "contacto"            =>$request->input("contacto"),
            "telefono_contacto"   =>$request->input("telefono_contacto"),
            "moneda"              =>$request->input("moneda"),
            "logo"                =>$request->input("logo"),
            "empresa_verde"       =>$request->input("empresa_verde"),
            "tipo_cuadre"         =>$request->input("tipo_cuadre"),
            "valuacion_inv"       =>$request->input("valuacion_inv"),
            "usuario_modificador" =>$request->input("usuario_modificador")
       );

    //    return response()->json( $datos);

       $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
       ];

       $validator = validator($datos, [
           "nombre"              => 'required|string',
           "telefono_empresa"    => 'required|string',
           "email_empresa"       => 'required|string',
           "rnc"                 => 'required|string',
           "calle"               => 'required|string',  
           "contacto"            => 'required|string',   
           "telefono_contacto"   => 'required|string',
           "id_region"           => 'required',
           "id_municipio"        => 'required',
           "id_provincia"        => 'required',
           "empresa_verde"       => 'required',
           "tipo_cuadre"         => 'required',
           "valuacion_inv"       => 'required',
           "usuario_modificador" => 'required',
       ],$messages);

       if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
       }else{
           if ($request->hasFile('logo')) {
                // Storage::delete('public/'.$producto->imagen);
                $imagen = $request->file('logo');
                $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                $datos['logo'] = $request->file('logo')->storeAs('uploads', 'empresa/'.$nombreImagen, 'public');
            }

            $empresa->update($datos);
            return $this->successResponse($empresa, $request->urlRequest);
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

    //     return $this->successResponse($puertos, $request->urlRequest);
    // }

    public function busqueda(Request $request){
        $empresa = $request->get('empresa');
        
        $busqueda = Empresa::where([['empresas.nombre','=',$empresa],
                                    ['empresas.estado','=','ACTIVO']])->get(); 
                                                        
        return $this->successResponse($busqueda, $request->urlRequest);
    }

    public function permisosEmpresaValor(Request $request)
    {
        $empresa = permisosEmpresaValor::get();
        return $this->successResponse($empresa, $request->urlRequest);
    }
    
    public function AutoLlenadoPermisosEmpresa(Request $request) {        
        $respuesta = array();
            
        $modulos = Modulos::orderBy('orden', 'asc')->get();
    
        $generales = permisosEmpresa::orderBy('created_at', 'desc')->get();
    
        $menu = Menu::join('modulos','modulos.id','=','menus.modulo')->
                        select('menus.*','modulos.icon','modulos.modulo as nombre_modulo')->
                        get();
    
    
        $_modulos = array("label" => 'modulos', "data" => $modulos, "icono" => 'fas fa-dolly-flatbed');
        $_generales = array("label" => 'generales', "data" => $generales, "icono" => 'fas fa-dolly-flatbed');
        $_menu = array("label" => 'menu', "data" => $menu, "icono" => 'fas fa-dolly-flatbed');
    
        array_push($respuesta,$_modulos);
        array_push($respuesta,$_generales);
        array_push($respuesta,$_menu);
    
        return $this->successResponse($respuesta, $request->urlRequest);

    }

    public function guardarPermisosEmpresa(Request $request) {
        $datos = $request->all();
        return response()->json($datos);
    }
}
