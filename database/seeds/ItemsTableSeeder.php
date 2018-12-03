<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'name' => config('seeds.items.name'),
            'category_id' => config('seeds.categories.id'),
            'user_id' => config('seeds.users.id'),
        ]);

        factory(Item::class, config('factories.item.number'))->create();
    }
}
