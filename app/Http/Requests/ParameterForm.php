<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParameterForm extends FormRequest
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
            "name" => "required|alpha_num|max:50",
            "description" => "required|alpha_num",
            "value" => "required|numeric",
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El :nombre es obligatorio!',
            'name.alpha_num' => 'El :nombre debe contener numeros y letras!',
            'name.max' => 'El :nombre debe tener maximo:max.',

            'description.required' => 'La :descripcion es obligatorio!',
            'description.alpha_num' => 'La :descripcion debe contener numeros y letras!',
            'description.max' => 'La :descripcion debe tener maximo:max.',  
            
            'value.required' => 'El :valor es obligatorio!',
            'value.numeric' => 'El :valor solo puede contener numeros!',
        ];
    }
}
