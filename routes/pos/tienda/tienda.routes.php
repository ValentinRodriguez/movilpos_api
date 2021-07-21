
<?php

use Illuminate\Support\Facades\Route;

    //API WOOCOMMERCE
    Route::get('/woocommerce/actprecio/{page}', 'tienda\WooCommerceController@getProducts');
    Route::get('/woocommerce/contarprecio/{page}', 'tienda\WooCommerceController@countProducts');
    Route::apiresource('/woocommerce', 'tienda\WooCommerceController');