<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => config('seeds.categories.name'),
            'user_id' => config('seeds.users.id'),
        ]);

        factory(Category::class, config('factories.category.number'))->create();
    }
}
