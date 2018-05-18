<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AffairForm extends FormRequest
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
            //"document_type_id" => "required|alpha_num",
            "name" => "required|alpha_num|max:50",
            "description" => "required|alpha_num",
        ];
    }

    public function messages()
    {
        return [
            //'document_type_id.between' => 'El :attribute must be between :min - :max.',
            //'document_type_id.required' => 'El :attribute is required!',
            'name.required' => 'El :valor es obligatorio!',
            'name.alpha_num' => 'El :valor debe contener numeros y letras!',
            'name.max' => 'El :valor debe tener maximo:max.',

            'description.required' => 'El :valor es obligatorio!',
            'description.alpha_num' => 'El :valor debe contener numeros y letras!',
            'description.max' => 'El :valor debe tener maximo:max.',
            
        ];
    }
}
