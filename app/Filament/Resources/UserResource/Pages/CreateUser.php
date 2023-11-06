<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Carbon\Carbon;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    /**
     * Get the URL to redirect to after successful record creation.
     *
     * @return string
     */
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    /**
     * Mutate form data before creating a new user record.
     *
     * @param array $data
     * @return array
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Define email and password validation rules.
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:8', // You can adjust the password validation rules as needed.
        ];

        // Validate the email and password.
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            // Validation failed. You can handle the error here, e.g., by returning to the form page with error messages.
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Check if the email is already registered.
        if (UserResource::getModel()::where('email', $data['email'])->exists()) {
            return redirect()->back()->withErrors(['email' => 'Email already exists'])->withInput();
        }

        // If email and password are valid, proceed with creating the user.
        $data['email_verified_at'] = Carbon::now();
        $data['password'] = Hash::make($data['password']);

        return $data;
    }

    /**
     * Handle the creation of a new user record.
     *
     * @param array $data
     * @return Model
     * @throws \Exception
     */
    protected function handleRecordCreation(array $data): Model
    {
        try {
            // Create a new user record.
            $user = parent::handleRecordCreation($data);

            // Inject the role assignment logic here, e.g., using dependency injection.
            // $this->roleAssigner->assignRole($user, 'admin');

            // Return the created user.
            return $user;
        } catch (\Exception $e) {
            // Handle the exception, log it, or throw a custom exception.
            // You can also rollback the transaction if applicable.
            throw $e;
        }
    }
}
