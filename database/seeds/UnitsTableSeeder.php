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
            'user_id' => config('seeds.users.id'),
            'name' => config('seeds.units.name'),
        ]);

        factory(Unit::class, config('factories.unit.number'))->create();
    }
}
