<?php

use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run(Faker $faker)
    {
        $categories = ['uncategorized', 'Cucina', 'Politica', 'Sport', 'Cronaca', 'Animali', 'Viaggi'];

        foreach ($categories as $category) {
            Category::create([
                'slug' => Category::getSlug($category),
                'name' => $category,
                'description' =>  $faker->paragraphs(rand(2, 10), true),
            ]);
        }
    }
}
