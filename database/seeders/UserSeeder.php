<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 1,
            'password' => Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mohit Gohel',
            'email' => 'mohitgohel@gmail.com',
            'role' => 1,
            'password' => Hash::make('123456'),
        ]);
    }
}
