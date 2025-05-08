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
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '099827323432',
            'password' => bcrypt('p@55word'),
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'nama' => 'Sopian Aji',
            'email' => 'sp[iann4aji@gmail.com',
            'role' => '0',
            'hp' => "080000000986",
            'password' => bcrypt('p@55word'),
        ]);
        
    
        $this->call([
            UserSeeder::class,
        ]);
        
            
    }
}
