<?php

use Illuminate\Support\Facades\Route;

    // ACTIVIDADES
    Route::get('/busqueda/actividades','miscelaneos\ActividadesController@busqueda');
    Route::get('/vencimiento/actividades','miscelaneos\ActividadesController@ActividadesVencidas');
    Route::apiresource('/actividades','miscelaneos\ActividadesController');