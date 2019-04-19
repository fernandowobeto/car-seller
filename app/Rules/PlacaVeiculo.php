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
        return is_valid_placa_veiculo($value);
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
