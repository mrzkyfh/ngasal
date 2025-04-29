<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Anggota;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Anggota::create([
            'nama' => 'Muhammad',
            'hp' => '0909237'
        ]);
        Anggota::create([
            'nama' => 'kiki',
            'hp' => '0909237'
        ]);
        Anggota::create([
            'nama' => 'koko',
            'hp' => '0909237'
        ]);
    }
}
