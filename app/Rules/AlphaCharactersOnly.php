<?php

// app/Rules/AlphaCharactersOnly.php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AlphaCharactersOnly implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Ensure the value is at least 5 characters and contains only letters.
        return strlen($value) >= 4 && preg_match('/^[A-Za-z]+$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must contain at least 4 letters.';
    }
}

