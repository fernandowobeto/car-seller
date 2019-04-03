<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PerfilCorSaveRequest extends FormRequest
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
        $rules = [
            'name' => [
                'required',
                'max:100'
            ]
        ];

        if($this->id){
            $rules['name'][] = Rule::unique('cores')->ignore($this->id);
        }else{
            $rules['name'][] = 'unique:cores';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Informe a descrição'
        ];
    }
}
