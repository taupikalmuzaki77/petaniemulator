<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name'=> 'action',
            'slug'=> 'action'
        ]);
        Genre::create([
            'name'=> 'adventure',
            'slug'=> 'adventure'
        ]);
        Genre::create([
            'name'=> 'arcade',
            'slug'=> 'arcade'
        ]);
        Genre::create([
            'name'=> 'casual',
            'slug'=> 'casual'
        ]);
        Genre::create([
            'name'=> 'fighting',
            'slug'=> 'fighting'
        ]);
        Genre::create([
            'name'=> 'horror',
            'slug'=> 'horror'
        ]);
        Genre::create([
            'name'=> 'platformer',
            'slug'=> 'platformer'
        ]);
        Genre::create([
            'name'=> 'puzzle',
            'slug'=> 'puzzle'
        ]);
        Genre::create([
            'name'=> 'racing',
            'slug'=> 'racing'
        ]);
        Genre::create([
            'name'=> 'role playing',
            'slug'=> 'role-playing'
        ]);
        Genre::create([
            'name'=> 'shooter',
            'slug'=> 'Shooter'
        ]);
        Genre::create([
            'name'=> 'simulation',
            'slug'=> 'simulation'
        ]);
        Genre::create([
            'name'=> 'sports',
            'slug'=> 'sports'
        ]);
        Genre::create([
            'name'=> 'strategy',
            'slug'=> 'strategy'
        ]);
    }
}
