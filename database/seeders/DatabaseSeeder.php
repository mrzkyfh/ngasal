<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Administrasi',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '12345678901',
            'password' => bcrypt('password'),
        ]);

         User::create([
            'name' => 'kiki',
            'email' => 'amin@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '23456789010',
            'password' => bcrypt('password'),
        ]);
    }
}
