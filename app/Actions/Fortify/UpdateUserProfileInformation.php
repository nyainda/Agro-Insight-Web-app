<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Session;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        // Check if the password field is provided and not empty
        $passwordProvided = !empty($input['password_confirmation']);

        if (!$passwordProvided) {
            throw ValidationException::withMessages([
                'password_confirmation' => 'Please enter your password to save changes.',
            ]);
        }

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'image', 'max:1024'],
            'password_confirmation' => ['required', 'string'],
        ])->after(function ($validator) use ($user, $input) {
            if (!Hash::check($input['password_confirmation'], $user->password)) {
                $validator->errors()->add('password_confirmation', 'The provided password is incorrect.');
            }
        })->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
        ])->save();

    }
}
