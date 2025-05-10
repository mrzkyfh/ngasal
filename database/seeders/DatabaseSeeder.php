<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            'nama' => 'Administrasi',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '08976923623',
            'password' => bcrypt('password'),
        ]);

         User::create([
            'nama' => 'kiki',
            'email' => 'amin@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '08656923623',
            'password' => bcrypt('password'),
        ]);
    }
}
