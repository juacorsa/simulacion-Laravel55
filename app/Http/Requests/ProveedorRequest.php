<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'codigo'    => 'required|unique:proveedores,codigo,'.$this->id,
            'nombre'    => 'required|max:80',
            'direccion' => 'max:80',
            'fax'       => 'max:20',
            'telefono'  => 'max:20',
            'poblacion' => 'max:80',
            'email'     => 'sometimes|nullable|email|max:80',            
            'contacto'  => 'max:40'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es un dato obligatorio.',
            'nombre.max'      => 'El nombre debe tener como máximo :max caracteres.',
            'codigo.required' => 'El código es un dato requerido.',
            'codigo.unique'   => 'El código ya existe en la base de datos.',
            'direccion.max'   => 'La dirección debe tener como máximo :max caracteres.',
            'fax.max'         => 'El fax debe tener como máximo :max caracteres.',
            'telefono.max'    => 'El teléfono debe tener como máximo :max caracteres.',            
            'email.max'       => 'El email debe tener como máximo :max caracteres.',
            'email.email'     => 'El email no tiene el formato esperado.',
            'contacto.max'    => 'El contacto debe tener como máximo :max caracteres.'            
        ];
    }    
}
