<?php

use App\Unit;
use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            'name' => config('seeds.categories.name'),
            'user_id' => config('seeds.users.id'),
        ]);

        factory(Unit::class, config('factories.unit.number'))->create();
    }
}
