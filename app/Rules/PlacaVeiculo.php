<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PlacaVeiculo implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^[A-Z]{3}[0-9]{1}[0-9A-Z]{1}[0-9]{2}$/', $value) > 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'A placa informada é inválida.';
    }
}
