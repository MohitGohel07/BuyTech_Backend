<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class genderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genders')->insert([
            'id' => 1,
            'title' => 'all',
        ]);
        DB::table('genders')->insert([
            'id' => 2,
            'title' => 'male',
        ]);
        DB::table('genders')->insert([
            'id' => 3,
            'title' => 'female',
        ]);
    }
}
