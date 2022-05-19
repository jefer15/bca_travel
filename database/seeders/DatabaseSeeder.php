<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Favorite;
use App\Models\Review;
use App\Models\Site;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Subcategory::factory(10)->create();
        User::factory()->count(10)->create();
        Category::factory()->count(10)->create();
        Site::factory()->count(10)->create();
        Review::factory()->count(10)->create();
        Favorite::factory()->count(10)->create();
    }
}
