<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password as FortifyPassword;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    protected function passwordRules(): array
    {
        // Existing password rules
        $rules = ['required', 'string', new FortifyPassword, 'confirmed'];

        // Additional rules
        $rules[] = (new FortifyPassword)->length(8);  // Require at least 10 characters
        $rules[] = (new FortifyPassword)->requireUppercase(); // Require at least one uppercase character
        //$rules[] = (new FortifyPassword)->requireNumeric();  // Require at least one numeric character
        //$rules[] = (new FortifyPassword)->requireSpecialCharacter(); // Require at least one special character

        return $rules;
    }
}

