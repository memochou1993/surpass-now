<?php

use Faker\Generator as Faker;

$factory->define(\App\Record::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 5),
        'item_id' => $faker->numberBetween($min = 1, $max = 5),
        'frequency' => $faker->randomElement([0.5, 1.0, 1.5]),
        'unit' => $faker->bothify('Unit #?#?'),
        'completed' => false,
    ];
});
