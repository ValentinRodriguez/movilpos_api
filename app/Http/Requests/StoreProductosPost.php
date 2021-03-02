<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductosPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_categoria' => 'required|numeric',
            'codigo' => 'required|string|min:3|max:50',
            'descripcion' => 'required|string|min:10|max:500',
            'imagen' => 'required|string',
            'stock' => 'required|numeric',
            'precio_compra' => 'required',
            'precio_venta' => 'required',
            'ventas' => 'required|numeric',
        ];
    }
}
