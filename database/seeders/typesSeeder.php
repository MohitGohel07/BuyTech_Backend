<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class typesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            'id' => 1,
            'title' => 'all',
        ]);
        DB::table('types')->insert([
            'id' => 2,
            'title' => 'analog',
        ]);
        DB::table('types')->insert([
            'id' => 3,
            'title' => 'digital',
        ]);
    }
}
