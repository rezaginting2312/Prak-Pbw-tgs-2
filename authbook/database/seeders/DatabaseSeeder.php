<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // --- Categories ---
        Category::insert([
            ['name' => 'Fiction'],
            ['name' => 'Science'],
            ['name' => 'Technology'],
            ['name' => 'History'],
        ]);

        // --- Users ---
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'role' => 'admin',
                'password' => bcrypt('password'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'staff@example.com'],
            [
                'name' => 'Staff User',
                'role' => 'staff',
                'password' => bcrypt('password'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'viewer@example.com'],
            [
                'name' => 'Viewer User',
                'role' => 'viewer',
                'password' => bcrypt('password'),
            ]
        );
    }
}
