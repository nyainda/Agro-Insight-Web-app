<?php

// UserSeeder.php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Define an array of admin data with emails and passwords
        $admins = [
            ['email' => 'admin@example.com', 'password' => 'admin123'],
            ['email' => 'anotheradmin@example.com', 'password' => 'anotheradmin123'],
            ['email' => 'oyugi@.com', 'password' => '12345678'],
            // Add more admins as needed
        ];

        foreach ($admins as $adminData) {
            $adminEmail = $adminData['email'];
            $adminPassword = $adminData['password'];

            // Check if the admin user with the specified email already exists
            $existingAdminUser = User::where('email', $adminEmail)->first();

            if (!$existingAdminUser) {
                // The admin user with the specified email doesn't exist, so create it
                $adminUser = User::factory()->create([
                    'email' => $adminEmail,
                    'name' => 'Admin',
                    'password' => bcrypt($adminPassword),
                ]);

                // Assign the admin role to the admin user
                $adminRole = Role::where('name', 'admin')->first();
                if ($adminRole) {
                    $adminUser->assignRole($adminRole);
                }
            } else {
                // The admin user with the specified email already exists. You can handle this case as needed
                // For example, you can log an error or take other appropriate actions
                // Here, we'll just display a message in the console
                $this->command->info("Admin user with email $adminEmail already exists.");
            }
        }
    }
}
