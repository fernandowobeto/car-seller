<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MoneyBr implements Rule
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
        return preg_match('/^\s*(?:[1-9]\d{0,2}(?:\.\d{3})*|0)(?:,\d{1,2})?$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'O valor informado é um valor inválido para o tipo moeda.';
    }
}
