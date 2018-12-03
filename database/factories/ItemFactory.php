<?php

use Faker\Generator as Faker;

$factory->define(\App\Item::class, function (Faker $faker) {
    return [
        'name' => $faker->bothify('Item #?#?'),
        'user_id' => $faker->numberBetween($min = 1, $max = 5),
        'category_id' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
