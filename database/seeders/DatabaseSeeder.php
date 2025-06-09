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
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '085162902443',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'kiki',
            'email' => 'kiki@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '099452353',
            'password' => bcrypt('password'),
        ]);  



    }
}
