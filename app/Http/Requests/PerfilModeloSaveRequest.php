<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerfilModeloSaveRequest extends FormRequest
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
           'name' => 'required|unique:marcas|max:60',
           'marca_id' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Informe a descrição',
            'marca_id.required' => 'Informe a marca'
        ];
    }
}
