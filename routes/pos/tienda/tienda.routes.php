
<?php

use Illuminate\Support\Facades\Route;

    //API WOOCOMMERCE
    // Route::get('/woocommerce/actprecio/{page}', 'tienda\WooCommerceController@getProducts');
    // Route::get('/woocommerce/contarprecio/{page}', 'tienda\WooCommerceController@countProducts');
    // Route::apiresource('/woocommerce', 'tienda\WooCommerceController');

     // CATEGORIAS
     Route::apiresource('/productos-plaza', 'tienda\InvProductoStoreController');

    // CATEGORIAS
    Route::apiresource('/categorias-plaza', 'tienda\CategoriaStoreController');

    // PLANES
    Route::apiresource('/planes', 'tienda\planesController');

    //atributos
    Route::get('/atributo-producto', 'tienda\InvProductoStoreController@atributo');