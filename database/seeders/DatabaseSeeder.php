<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Sergl;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $categories = Category::factory(20)->create();
        $tags = Tag::factory(15)->create();
        $sergls = Sergl::factory(50)->create();

        foreach ($sergls as $sergl){
            $tagsId = $tags->random(5)->pluck('id');
            $sergl->tags()->attach($tagsId);
        }




    }
}
