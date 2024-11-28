<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        movies::insert([
            'genre_id' => 1,
            'title' => 'Tenet',
            'photo' => 'img/tenet.jpg',
            'publish_date' => fake()->date(max: 'now'),
            'description' => fake()->text(100),

        ]);

        movies::insert([
            'genre_id' => 2,
            'title' => 'Thor',
            'photo' => 'img/thor.jpg',
            'publish_date' => fake()->date(max: 'now'),
            'description' => fake()->text(100),

        ]);

        movies::insert([
            'genre_id' => 3,
            'title' => 'Joker',
            'photo' => 'img/joker.jpg',
            'publish_date' => fake()->date(max: 'now'),
            'description' => fake()->text(100),

        ]);

        movies::insert([
            'genre_id' => 1,
            'title' => 'Ant-Man',
            'photo' => 'img/antman.jpg',
            'publish_date' => fake()->date(max: 'now'),
            'description' => fake()->text(100),

        ]);
    }
}
