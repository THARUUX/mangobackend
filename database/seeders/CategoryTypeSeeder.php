<?php

namespace Database\Seeders;

use App\Models\CategoryType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryType::factory()->create([
            'name' => 'Post',
        ]);
        CategoryType::factory()->create([
            'name' => 'Gallery',
        ]);
        CategoryType::factory()->create([
            'name' => 'Video',
        ]);
    }
}
