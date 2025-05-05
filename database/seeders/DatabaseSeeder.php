<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // Import Hash facade

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a user with a hashed password
        User::factory()->create([
            'name' => 'Sizan ',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'), // Hash the password
        ]);
    }
}
