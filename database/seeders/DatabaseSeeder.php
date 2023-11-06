<?php

// DatabaseSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class); // Run the RoleSeeder first
        $this->call(UserSeeder::class); // Then run the UserSeeder

        // Additional seeders can be called as needed
        // ...
    }
}

