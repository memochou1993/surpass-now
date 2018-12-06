<?php

use App\Record;
use Illuminate\Database\Seeder;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Record::create([
            'user_id' => config('seeds.users.id'),
            'item_id' => config('seeds.items.id'),
            'frequency' => config('seeds.records.frequency'),
            'unit' => config('seeds.units.name'),
            'completed' => config('seeds.records.completed'),
        ]);

        factory(Record::class, config('factories.record.number'))->create();
    }
}
