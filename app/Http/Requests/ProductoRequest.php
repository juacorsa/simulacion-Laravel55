<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
{    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'codigo' => 'required|integer|min:1|unique:productos,codigo,'.$this->id,
            'nombre' => 'required|max:100'           
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es un dato obligatorio.',
            'nombre.max'      => 'El nombre debe tener como máximo :max caracteres.',            
            'codigo.required' => 'El código es un dato requerido.',
            'codigo.unique'   => 'El código ya existe en la base de datos.',
            'codigo.integer'  => 'El código debe ser un número.',
            'codigo.min'      => 'El código debe ser un número mayor que cero.'
        ];
    }          
}
