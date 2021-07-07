<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Librerias\WooCommerce;
use Automattic\WooCommerce\Client;

class WooCommerceController extends ApiResponseController
{    
    public function woocommerce() {
        $woocommerce = new Client(
            'http://movilsoluciones/', 
            'ck_d266411c817088d297698cf2e865811c1f5b7317', 
            'cs_a1b69c5ef32399677d04df55d09aba2568f79f90',
            [
                'wp_api' => true,
                'version' => 'wc/v3',
            ]
        );

        return $woocommerce;
    }

    public function countProducts($page)
    {
        $productos = $this->woocommerce()->get('products', ['page' => $page]);

        $data = null;
        $costo_anterior_rd = null;

        foreach ($productos as $key => $producto) {

            $data  = $producto->meta_data;
            $costo_anterior_rd = $this->getMetadataByKey($data, "_alg_wc_cog_cost");
            
            if ($costo_anterior_rd === false || $costo_anterior_rd->value === "") {
                $mensaje = [
                    'error' => true,
                    'mensaje' => 'Posible producto sin costo',
                    'producto' => $producto
                ];
                return response()->json($mensaje);
            }
        }
        return response()->json(count($productos)); 
    }

    public function getProducts($page)
    {
        $productos = $this->woocommerce()->get('products', ['page' => $page]);

        $data = null;
        $costo = null;
        $dolar_actual = 62;
        $costo_envio = 450;

        foreach ($productos as $key => $producto) {

            $data  = $producto->meta_data;
            //$variacion = [];

            $tasa_dolar = $this->getMetadataByKey($data, "tasa_dolar");
            $amazon_costo_variaciones = $this->getMetadataByKey($data, "amazon_costo_variaciones");
            $costo_amazon = $this->getMetadataByKey($data, "costo_amazon");
            $url_amazon = $this->getMetadataByKey($data, "url_amazon"); 
            $beneficio_prod = $this->getMetadataByKey($data, "beneficio"); 

            $nuevo_costo_producto = null;
            $price = null;
            $regular_price = null;
            
            if ($producto->type === "simple") {
                if ($costo_amazon === false || $tasa_dolar === false || $beneficio_prod === false) {
                    return response()->json(array("data" => $producto, "code" => 200, "msj" => "Costo o tasa de dolar vacía en este producto"), 200);
                }else {
                    $nuevo_costo_producto = round( floatval($costo_amazon->value) * $dolar_actual) + $costo_envio;
                    $beneficio = round( floatval($beneficio_prod->value));
                    $price = ($nuevo_costo_producto * 0.20) + $nuevo_costo_producto + $beneficio;
                    $regular_price = ($price * 0.20) + $price;
                    
                    $cambio = [
                        'price'         => $price,
                        'regular_price' => $regular_price,
                        'sale_price'    => $price,
                        'meta_data'     => $data
                    ];
                    $this->updateMetadataByKey($data, "_alg_wc_cog_cost",  strval(round($nuevo_costo_producto, 2)));
                    $this->woocommerce()->put('products/'.$producto->id, $cambio);
                }
            }
            
            if ($producto->type === "variable") {
                
                if ($amazon_costo_variaciones === false || $tasa_dolar === false || $beneficio_prod === false) {
                    return response()->json(array("data" => $producto, "code" => 200, "msj" => "Costo de variaciones o tasa de dolar vacía en este producto"), 200);
                }else {                        
                    $costos_variantes = explode(",", $amazon_costo_variaciones->value);
                    $variacion = null;

                    $i = 0;

                    foreach ($producto->variations as $key => $variacion_id) {
                        $product_id = intval($producto->id);                
                        $variacion = $this->getVariation($product_id, $variacion_id);
                        
                        $beneficio = round( floatval($beneficio_prod->value));
                        $nuevo_costo_producto = round( floatval($costos_variantes[$i]) * $dolar_actual) + $costo_envio;
                        $price = ($nuevo_costo_producto * 0.20) + $nuevo_costo_producto + $beneficio;
                        $regular_price = ($price * 0.20) + $price;

                        $cambio = [
                            'price'         => $price,
                            'regular_price' => strval($regular_price),
                            'sale_price'    => strval($price),
                            'meta_data'     => $data
                        ];
                        $this->updateMetadataByKey($data, "_alg_wc_cog_cost",  strval(round($nuevo_costo_producto, 2)));
                        $this->updateVariation($product_id, $variacion_id, $cambio);
                        $i++;
                    }
                    //return response()->json($variacion);
                }
            }
        }
        return response()->json($productos); 
    }

    public function getVariation($producto, $variacion) {
        $variacion = $this->woocommerce()->get('products/'.$producto.'/variations/'.$variacion);
        return $variacion;
    }

    public function updateVariation($producto, $variacion, $cambio) {
        $variacion = $this->woocommerce()->put('products/'.$producto.'/variations/'.$variacion, $cambio);
    }

    public function getMetadataByKey($metadata,$key) {
        foreach($metadata as $val) {
            try {
                if($val->key===$key) {
                    return $val;
                }
            } catch (\Exception $error) {
                return $error->getMessage();
            }
            
        }
        return false;
    }

    public function updateMetadataByKey($metadata,$key, $valor) {
        foreach($metadata as $val) {
            if($val->key===$key) {
                $val->value = $valor;
            }
        }
        return false;
    }

    public function index()
    {  
        $productos = $this->woocommerce()->get('products');
        $data = [];

        foreach ($productos as $producto) {
           array_push($data, $producto);
        }    
        return response()->json($productos); 
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // $data = [
        //     'update' => [
        //                     [
        //                         'id' => 4163,
        //                         'price' => '1000'
        //                     ],
        //                     [
        //                         'id' => 296,
        //                         'price' => '1000'
        //                     ]
        //                 ]
        //     ];
        // $data = [
        //     'regular_price' => '1000'
        // ];
        // return response()->json($this->woocommerce()->post('products/4163', $data));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        //
    }
}
