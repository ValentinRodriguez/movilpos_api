<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// RUTAS DEL LOGIN NUEVAMENTE
Route::post('login', 'AuthController@login');
Route::post('signup', 'AuthController@signup');
Route::post('auth/token', 'AuthController@token');

Route::group([
    'middleware' => ['auth:api']
], function ($router) {   
    Route::post('logout', 'AuthController@logout');
    Route::get('users/{id}','AuthController@show');
    Route::get('busqueda/users','AuthController@busqueda');
    Route::get('busqueda/username','AuthController@busquedaUsuario');
    Route::get('busqueda/email','AuthController@busquedaEmail');
    Route::get('busqueda/numemp','AuthController@busquedaNumEmp');
    Route::post('usuario-logado', 'AuthController@getAuthUser');
    Route::post('desactivar', 'AuthController@unLockLogin');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('cambia', 'AuthController@cambia');
    Route::post('act/usuario/{id}', 'AuthController@actualizar');
    Route::post('user', 'AuthController@user');
    Route::apiresource('users','AuthController');

    // DGII
    Route::get('/busqueda/dgii-rnc', 'DgiiController@busqueda');
    Route::get('/formulario606/dgii-rnc', 'DgiiController@formulario606');
    Route::apiResource('/dgii-rnc', 'DgiiController');
    
    // HOME
    Route::get('/autollenado/home', 'Home@autollenado');
});
