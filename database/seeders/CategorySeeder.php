<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=> 'playstation 1',
            'slug'=> 'playstation-1'
        ]);

        Category::create([
            'name'=> 'playstation 2',
            'slug'=> 'playstation-2'
        ]);

        Category::create([
            'name'=> 'playstation 3',
            'slug'=> 'playstation-3'
        ]);
    }
}
