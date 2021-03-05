<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use Illuminate\Http\Request;
use App\Librerias\User;
use App\Librerias\bodegasUsuarios;
use App\Librerias\noempleados;
use App\Librerias\Empresa;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\RegisterAuthRequest;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('jwt.auth', ['except' => ['login']]);
    // }

    public function index()
    {
        $user  = User::orderBy('name', 'asc')->
                       leftjoin('noempleados','noempleados.email','=','users.email')->
                       leftjoin('nopuestos','nopuestos.id_puesto','=','noempleados.id_puesto')->
                       select('users.*','noempleados.primernombre','noempleados.segundonombre',
                              'noempleados.primerapellido','noempleados.segundoapellido','nopuestos.titulo as puesto')->
                       where('users.estado','=','ACTIVO')->
                       get();

        return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function login(Request $request)
    {
        try {                          
            $credentials = request(['email', 'password']);
            $email = request('email');
            $sessionId = md5(uniqid());

            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Usuario ó clave incorrecta'], 401);
            }           
            User::where('email','=',$email)->update(['session_id' => $sessionId]);  
            return $this->respondWithToken($token, $email, $sessionId);
        }
        catch (\Exception $e ){
            return response()->json(array("data" => $e, "code" => 501, "msj" => "Error"), 501);
        }      
    }

    public function logout()
    {
        try {
            auth::logout();
            return response()->json(array("data" => '', "code" => 200, "msj" => "Respuesta Exitosa"), 200);
        }
        catch (\Exception $e ){
            return response()->json(array("data" => '', "code" => 501, "msj" => $e), 501);
        }  
    }

    // public function getAuthUser(Request  $request) {
    //     $this->validate($request, [
    //         'token' => 'required'
    //     ]);
        
    //     $user = JWTAuth::authenticate($request->token);
    //     return  response()->json(['user' => $user]);
    // }

    public function lockLogin() {
        try {                
            DB::beginTransaction();                             
                $email = request('email'); 
                User::where('email','=',$email)->update(['isLogged' => 'logged']);                
            DB::commit();            
            return response()->json(array("data" => true, "code" => 200, "msj" => "Usuario Logueado"), 200);
        } catch (\Exception $e ){
            return response()->json(array("data" => $e, "code" => 501, "msj" => "Error"), 501);
        }  
    }

    public function unLockLogin() {
        try {                
            DB::beginTransaction();                             
                $email = request('email'); 
                User::where('email','=',$email)->update(['isLogged' => NULL]);                
            DB::commit();            
            return response()->json(array("data" => true, "code" => 200, "msj" => "Usuario Bloqueado"), 200);
        } catch (\Exception $e ){
            return $this->errorResponse($e);
        }  
    }

    public function desactivar() {
        try {                
            DB::beginTransaction();                             
                $email = request('email'); 
                User::where('email','=',$email)->update(['estado' => 'inactivo']);                
            DB::commit();            
            return response()->json(array("data" => true, "code" => 200, "msj" => "Usuario Desactivado"), 200);
        } catch (\Exception $e ){
            return $this->errorResponse($e);
        }  
    }

    public function signup(SignUpRequest $request)
    {
        $datos = array(
            'username'              =>$request->input('username') ,
            'name'                  =>$request->input('name'),
            'surname'               =>$request->input('surname'),
            'email'                 =>$request->input('email'),
            'id_numemp'             =>$request->input('id_numemp'),
            'password'              =>$request->input('password'),
            'password_confirmation' =>$request->input('password_confirmation'),
            'foto'                  =>$request->input('foto'),
            'impresora'             =>$request->input('impresora'),
            'estado'                =>$request->input('estado')
        );
        //return response()->json($datos);
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            "username"  => 'required|string',
            "name"      => 'required|string',
            "surname"   => 'required|string',
            "id_numemp" => 'required|string',
            "password"  => 'required|string',
            "email"     => 'required|string',
            "estado"    => 'required|string',
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors->all());
        }else{
            if ($request->hasFile('foto')) {
                // Storage::delete('public/'.$producto->imagen);
                $imagen = $request->file('foto');
                $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                $datos['foto']=$request->file('foto')->storeAs('uploads', 'usuarios/'.$nombreImagen, 'public');
            }
            $user = User::create($datos);
            return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
        }
    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    public function refresh()
    {
        return $this->respondWithToken(auth::refresh());

    }

    protected function respondWithToken($token, $email = null, $sessionId = null)
    {
        if ($email !== null) {
            $bodegas_permiso = bodegasUsuarios::join('bodegas','bodegas_usuarios.id_bodega','=','bodegas.id_bodega')->
                                      select('bodegas_usuarios.*','bodegas.descripcion')->
                                      where('bodegas_usuarios.email','=',$email)->
                                      get();

            $empleados = noempleados::where('noempleados.email','=',$email)->
                                      first();

            $empresa = Empresa::orderBy('created_at', 'desc')->where('estado','=','activo')->get();
        }

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'access_type' => 'bearer',
            'sessionId' => $sessionId,
            'expires_in' => auth::factory()->getTTL() * 1440,
            'bodegas_permisos' => $bodegas_permiso,
            'empleado' => $empleados,
            'empresa' => $empresa,
            'user' => auth()->user()
        ]);
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('parametro');
        $codigo = $request->get('codigo');
        $email = $request->get('email');
        $user  = User::orderBy('id', 'asc')->parametro($parametro)->codigo($codigo)->email($email)->get();

        return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function cambia()
    {
        $credentials = request(['email', 'password']);
        $email = $credentials->get('email');

        $user=    user::where('email','=',$email)->update()->all();
        if($user == null){
            return response()->json(['error' => 'Email ó clave incorrecta'], 401);
        }
        else{
            return response()->json(['email' => 'Actualizacion Exitosa'], 200);
        }
    }

    public function actualizar(Request $request, $id)
    {
        $usuario = User::find($id);

        $datos = array(
            "username"              =>$request->input("username"),
            "name"                  =>$request->input("name"),
            "surname"               =>$request->input("surname"),
            "email"                 =>$request->input("email"),
            "estado"                =>$request->input("estado"),
            'id_numemp'             =>$request->input('id_numemp'),
            "foto"                  =>$request->input("foto"),
            'impresora'             =>$request->input('impresora')
       );
       
       $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
       ];

       $validator = validator($datos, [
           "username"              => 'required|string',
            "name"                 => 'required|string',
            "surname"              => 'required|string',
            "id_numemp"            => 'required|string',
            "email"                => 'required|string',
            "estado"               => 'required|string',
       ],$messages);

       if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors->all());
       }else{
            if ($request->hasFile('foto')) {
                // Storage::delete('public/'.$producto->imagen);
                $imagen = $request->file('foto');
                $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                $datos['foto'] = $request->file('foto')->storeAs('uploads', 'usuarios/'.$nombreImagen, 'public');
            }

            if ($request->input("password") !== null) {
                $datos['password'] = $request->input("password");
            }
            $usuario->update($datos);
            return response()->json(array("data" => $usuario, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
       }
    }

    public function destroy($id)
    {
        $usuario = User::find($id);
        if ($usuario == null){
            return response()->json(array("data" => $usuario, "code" => 501, "msj" => "Respuesta Exitosa"), 501);
        }
        $usuario->update(['estado' => 'desactivado']);
        return response()->json(array("data" => $usuario, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function show($id) {
        $user = User::find($id);
        
        if ($user == null){
            return response()->json(array("data" => $user, "code" => 501, "msj" => "Respuesta Exitosa"), 501);
        }
        return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function busquedaUsuario(Request $request)
    {
        $username = $request->get('username');
        $user  = User::orderBy('id', 'asc')->username($username)->get();
        return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function busquedaEmail(Request $request)
    {
        $email = $request->get('email');
        $user  = User::orderBy('id', 'asc')->emailequal($email)->get();
        return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function busquedaNumEmp(Request $request)
    {
        $numemp = $request->get('empleado');
        $user  = User::orderBy('id', 'asc')->
                       where([['estado','=','activo'],['id_numemp','=',$numemp]])->
                       get();
        return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

}
