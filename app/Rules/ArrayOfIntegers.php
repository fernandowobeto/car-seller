<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ArrayOfIntegers implements Rule
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
        if (!is_array($value)) {
            return false;
        }

        foreach ($value as $v) {
            if (!filter_var($v, FILTER_VALIDATE_INT)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Problema com o array de valores inteiros.';
    }
}
