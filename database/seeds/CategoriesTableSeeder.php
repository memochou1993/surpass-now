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
            'user_id' => config('seeds.users.id'),
            'name' => config('seeds.categories.name'),
        ]);

        factory(Category::class, config('factories.category.number'))->create();
    }
}
