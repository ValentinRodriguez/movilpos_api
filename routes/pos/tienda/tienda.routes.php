
<?php

use Illuminate\Support\Facades\Route;

    //API WOOCOMMERCE
    // Route::get('/woocommerce/actprecio/{page}', 'tienda\WooCommerceController@getProducts');
    // Route::get('/woocommerce/contarprecio/{page}', 'tienda\WooCommerceController@countProducts');
    // Route::apiresource('/woocommerce', 'tienda\WooCommerceController');

     // CATEGORIAS
     Route::post('/productos-plaza/{id}', 'tienda\InvProductoStoreController@updateProduct');
     Route::apiresource('/productos-plaza', 'tienda\InvProductoStoreController');

    // CATEGORIAS
    Route::get('/categorias-plaza', 'tienda\CategoriaStoreController@allCategorias');

    // CATEGORIAS
    Route::get('/categoria-plaza/{id}', 'tienda\CategoriaStoreController@categoria');

    // SUBCATEGORIAS
    Route::get('/subcategoria-plaza/{id}', 'tienda\CategoriaStoreController@subcategoria');

    // SUBSUBCATEGORIAS
    Route::get('/subsubcategoria-plaza/{id}', 'tienda\CategoriaStoreController@subsubcategoria');
    
    // PLANES
    Route::apiresource('/planes', 'tienda\planesController');

    //atributos
    Route::get('/atributo-producto', 'tienda\InvProductoStoreController@atributo');