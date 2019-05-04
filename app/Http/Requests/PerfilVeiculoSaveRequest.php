<?php

namespace App\Http\Requests;

use App\Rules\ArrayOfIntegers;
use App\Rules\MoneyBr;
use App\Rules\PlacaVeiculo;
use Illuminate\Foundation\Http\FormRequest;

class PerfilVeiculoSaveRequest extends FormRequest
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
            'placa'             => ['required', new PlacaVeiculo],
            'modelo_id'         => 'required|integer',
            'ano_fabricacao'    => 'required|integer',
            'ano_modelo'        => 'required|integer',
            'cambio_id'         => 'required|integer',
            'combustivel_id'    => 'required|integer',
            'cor_id'            => 'required|integer',
            'quantidade_portas' => 'required|integer',
            'kilometragem'      => 'required|integer',
            'valor'             => ['required', new MoneyBr],
            'tipo_id'           => 'required|integer',
            'opcional'          => [new ArrayOfIntegers],
            'adicional'         => [new ArrayOfIntegers],
            'images.*'          => 'image|mimes:jpg,jpeg'
        ];
    }

}
