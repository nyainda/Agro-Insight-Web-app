<?php

// RoleSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Create roles here
        Role::create(['name' => 'admins']);
        // Add more roles as needed
    }
}
