<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::insert([
            'name' => 'Horror'
        ]);
        Genre::insert([
            'name' => 'Cartoon'
        ]);
        Genre::insert([
            'name' => 'action'
        ]);
        Genre::insert([
            'name' => 'romance'
        ]);
        Genre::insert([
            'name' => 'Comedy'
        ]);
    }
}
