<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Doctor;
use App\Models\News;
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
        Doctor::factory(10)->create();
//        Category::factory(10)->create();
//        News::factory(2)->create();
    }
}
