<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->create(['name' => 'Category 1']);
        Category::factory()->create(['name' => 'Category 2']);
        Category::factory()->create(['name' => 'Category 3']);
        Category::factory()->create(['name' => 'Category 4']);

        Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);
        Status::factory()->create(['name' => 'Considering', 'classes' => 'bg-[#8b60ed] text-white']);
        Status::factory()->create(['name' => 'In Progress', 'classes' => 'bg-[#ffc73c] text-white']);
        Status::factory()->create(['name' => 'Implemented', 'classes' => 'bg-[#1aab8b] text-white']);
        Status::factory()->create(['name' => 'Closed', 'classes' => 'bg-[#ec4546] text-white']);

        Idea::factory(30)->create();
    }
}
