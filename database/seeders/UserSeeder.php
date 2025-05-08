<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')-> insert([
            'nama' => 'kiki',
            'email' => 'amin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '099827332',
            'password' => bcrypt('p@55wor'),
        ]);
    }
}
